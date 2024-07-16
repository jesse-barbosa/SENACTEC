const tbody = document.getElementById('tbody');
class Filtro {

  async pegarInformacao(formData) {
    console.log(formData);
    try {
      const response = await fetch('/senactec/pagina/dados.php', {
        method: 'POST',
        body: formData,
      });
      const data = await response.json();
      console.log(data);
      if (data['erro']) {
        console.log('Usuário Não Encontrado!');
        tbody.innerText = 'Usuário Não Encontrado!';
      }
      else {
        tbody.innerHTML = '';
        data.forEach((element) => {
          tbody.innerHTML += `
          <tr class="d-flex align-items-center border border-black rounded mt-1">
            <td class="d-flex justify-content-center align-items-center border-0">
              ${element.usuario_imagem ? `<img src=${element.usuario_imagem}></img>`
              :
              `
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor"
                class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                <path fill-rule="evenodd"
                  d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                </svg>
                `
            }
            </td>
            <td class="col-10 border-0 d-flex justify-content-between align-items-center">
              <div>
                <h5 class="m-0">${element.usuario_nome}</h5>
                <p class="m-0">Data de Cadastro: 11/06/2024</p>
                <p class="m-0">Curso: ${element.curso_nome}</p>
              </div>
              <div class="justify-content-end">
                <a href="/senactec/pagina/profile.php?id=${element.usuario_id}">
                  <button class="btn btn-dark">Ver Perfil do aluno</button>
                </a>
              </div>
            </td>
          </tr>
          `;
        });
      }
    }
    catch (erro) {
      console.error(erro);
    }
  }

}

const inputFiltro = document.getElementById('filtro');
const selectFiltro = document.getElementById('selectFiltro');
const filtro = new Filtro();

filtro.pegarInformacao();

if (inputFiltro) {
  inputFiltro.addEventListener('input', () => {
    selectFiltro.value = '';
    setTimeout(() => {
      const formData = new FormData();
      formData.append('search', inputFiltro.value);
      console.log(inputFiltro.value);
      filtro.pegarInformacao(formData);
    }, 500);
  });
}

if (selectFiltro) {
  selectFiltro.addEventListener('change', () => {
    inputFiltro.value = '';
    setTimeout(() => {
      const formData = new FormData();
      formData.append('filter', selectFiltro.value);
      filtro.pegarInformacao(formData);
    });
  });
}