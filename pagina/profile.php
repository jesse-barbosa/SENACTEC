<?php
require_once(dirname(__DIR__) . "/class/User.php");

$user = new User();

session_start();

if (!$_SESSION['user_id']) {
  header('location: /senactec/pagina/login.php');
}

if (!$_GET['id']) {
  header('location: /senactec/pagina/alunos.php');
}

$info = $user->Info($_GET['id']);

($_SESSION['user_id'] === $_GET['id']) ? $permissao = 'Pessoal' : (($_SESSION['user_id'] !== $_GET['id'] && $info != null) ? $permissao = 'Visitante' :
    header('location: /senactec/pagina/alunos.php'));

?>

<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Senac</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="bg-light">
  <header>
    <?php include_once(dirname(__DIR__) . "/include/header.php"); ?>
  </header>

  <section>
    <div class="container-fluid">

      <!-- Menu da Direita ,Botão Logout e Apresentação do Site -->
      <?php
      foreach ($info as $value) {
        if ($permissao == 'Pessoal') {
          echo "
              <!-- Menu da Direita -->
              <div class='row justify-content-end'>
                <div class='col-6 mt-4 text-end'>
                  <h4>$value[nome]</h4>
                </div>
                <div class='col-1 mt-2'>
                  <svg xmlns='http://www.w3.org/2000/svg' width='64' height='64' fill='currentColor' class='bi bi-person-circle'
                    viewBox='0 0 16 16'>
                    <path d='M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0' />
                    <path fill-rule='evenodd'
                      d='M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1' />
                  </svg>
                </div>
              </div>

              <!-- Botão Logout -->
              <div class='row justify-content-end mt-2 me-3'>
                <div class='col-2 text-end'>
                  <!-- TODO: Botar Js com Redirect para Aluno -->
                  <form action='/senactec/pagina/logout.php' method='POST'>
                    <button class='btn btn-danger px-4 py-1'>Sair</button>
                  </form>
                </div>
              </div>

              <!-- Apresentção do Site -->
              <div class='row justify-content-center'>
                <div class='col-6'>
                  <h2 class='text-center mt-3'>Olá, $value[nome]</h2>
                  <h2 class='text-center'>Você possui 4 Projetos</h2>
                </div>
              </div>
            ";
        } else if ($permissao == 'Visitante') {
          echo "
              <div class='row justify-content-center mt-4'>
                <div class='col-6 d-flex flex-column align-items-center justify-content-center'>
                  <div class='col-1 mt-2'>
                    <svg xmlns='http://www.w3.org/2000/svg' width='64' height='64' fill='currentColor' class='bi bi-person-circle' viewBox='0 0 16 16'>
                      <path d='M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0' />
                      <path fill-rule='evenodd' d='M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1' />
                    </svg>
                  </div>
                  <h2 class='text-center mt-3'>$value[nome]</h2>
                  <h2 class='text-center'>4 Projetos</h2>
                </div>
              </div>
            ";
        }
      }
      ?>

      <!-- Buscador de Projeto -->
      <div class="row justify-content-center mt-5">
        <div class="col-4">
          <form class="d-flex" role="search">
            <input class="form-control border border-dark rounded-0" type="search" placeholder="Encontre seus projetos" aria-label="Search">
            <button class="btn btn-dark rounded-0" type="submit"><i class="bi bi-search"></i></button>
          </form>
        </div>
        <div class="col-2">
          <select class="form-select border border-dark" aria-label="Default select example">
            <option selected>Mostrar todos</option>
            <option value="1">Públicos</option>
            <option value="2">Privados</option>
          </select>
        </div>
      </div>
    </div>
  </section>

  <!-- Botão para abrir o modal -->
  <button class="btn btn-success rounded-5 position-fixed z-1 fs-4" data-bs-toggle="modal" data-bs-target="#sidePanelModal" style="top: 90%; right: 5px; transform: translateY(-50%);">
  <i class="bi bi-plus-circle"></i>
  </button>

  <!-- Modal -->
  <div class="modal fade" id="sidePanelModal" tabindex="-1" aria-labelledby="sidePanelModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-slideout">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="sidePanelModalLabel">Cadastro de Projetos</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="#" method="POST" enctype="multipart/form-data" class="form-control d-flex flex-column gap-3">
            <div class="d-flex flex-column gap-1">
              <p class="fs-5 fw-bold m-0">Imagem do Projeto</p>
              <label for="image" class="d-flex align-items-center justify-content-center form-control border-1 fs-5 fw-bold p-0" style="cursor: pointer;">
                <input type="file" name="image" id="image" class="visually-hidden" required>
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-image-fill my-1" viewBox="0 0 16 16">
                  <path d="M.002 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-12a2 2 0 0 1-2-2zm1 9v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V9.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062zm5-6.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0" />
                </svg>
              </label>
            </div>
            <div class="d-flex flex-column gap-1">
              <label for="name" class="form-control border-0 fs-5 fw-bold p-0">Nome Do Projeto</label>
              <input type="text" name="name" id="name" class="form-control" placeholder="Digite Aqui" required>
            </div>
            <div class="d-flex flex-column gap-1">
              <label for="description" class="form-control border-0 fs-5 fw-bold p-0">Descrição Do Projeto</label>
              <textarea name="description" id="description" class="form-control" maxlength="255" style="max-height:100px" placeholder="Digite Aqui a Descrição"></textarea>
            </div>
            <div class="d-flex flex-column gap-1">
              <label for="archive" class="form-control border-0 fs-5 fw-bold p-0">Arquivos do Projeto</label>
              <input type="file" name="archive" id="archive" class="form-control" multiple required>
            </div>
            <div class="d-flex flex-column gap-1">
              <label for="github" class="form-control border-0 fs-5 fw-bold p-0">Link para Repositório do GitHub
                (Opcional)
              </label>
              <input type="text" name="github" id="github" class="form-control" placeholder="Link do Repositório">
            </div>
            <div class="d-flex flex-column gap-1 col-12">
              <p class="form-control border-0 fs-5 fw-bold m-0 p-0">Visibilidade</p>
              <div class="d-flex gap-1">
                <label for="privado" class="border fs-5 p-0 text-center rounded-start col-6">
                  Privado
                </label>
                <input type="radio" name="visibilidade" id="privado" class="form-control visually-hidden" required>
                <label for="publico" class="border fs-5 p-0 text-center rounded-end col-6">
                  Público
                </label>
                <input type="radio" name="visibilidade" id="publico" class="form-control visually-hidden">
              </div>
            </div>
            <div class="d-flex flex-column gap-1">
              <input type="submit" name="github" id="github" class="btn btn-dark" value="Cadastrar Projeto" required>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <hr>

  <!-- Projetos Cadastrados pelo Usuário -->
  <h2 class="text-center mb-5">Meus projetos</h2>
  <div class="row d-flex flex-wrap gap-3 mx-3">
    <div class="col d-flex justify-content-center">
      <div class="card" style="width: 18rem;">
        <img src="/senactec/img/projetoEmBreve.png" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Nome do projeto</h5>
          <p class="card-text">Descrição Top do Projeto e como funciona</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Data de Criação: 14/06/2024</li>
        </ul>
        <div class="d-flex justify-content-center m-2">
          <a href="#" class="col text-center">
            <button class="btn btn-dark col-12">Ver Projeto</button>
          </a>
        </div>
      </div>
    </div>
    <div class="col d-flex justify-content-center">
      <div class="card" style="width: 18rem;">
        <img src="/senactec/img/projetoEmBreve.png" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Nome do projeto</h5>
          <p class="card-text">Descrição Top do Projeto e como funciona</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Data de Criação: 14/06/2024</li>
        </ul>
        <div class="d-flex justify-content-center m-2">
          <a href="#" class="col text-center">
            <button class="btn btn-dark col-12">Ver Projeto</button>
          </a>
        </div>
      </div>
    </div>
    <div class="col d-flex justify-content-center">
      <div class="card" style="width: 18rem;">
        <img src="/senactec/img/projetoEmBreve.png" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Nome do projeto</h5>
          <p class="card-text">Descrição Top do Projeto e como funciona</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Data de Criação: 14/06/2024</li>
        </ul>
        <div class="d-flex justify-content-center m-2">
          <a href="#" class="col text-center">
            <button class="btn btn-dark col-12">Ver Projeto</button>
          </a>
        </div>
      </div>
    </div>
    <div class="col d-flex justify-content-center">
      <div class="card" style="width: 18rem;">
        <img src="/senactec/img/projetoEmBreve.png" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Nome do projeto</h5>
          <p class="card-text">Descrição Top do Projeto e como funciona</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Data de Criação: 11/06/2024</li>
        </ul>
        <div class="d-flex justify-content-center m-2">
          <a href="#" class="col text-center">
            <button class="btn btn-dark col-12">Ver Projeto</button>
          </a>
        </div>
      </div>
    </div>
  </div>

  <?php include_once(dirname(__DIR__) . "/include/footer.php"); ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>