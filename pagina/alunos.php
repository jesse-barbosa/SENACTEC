  <div class="container-fluid">
    <div class="row">
      <div class="col-12 p-0">
        <div id="carouselExampleCaptions" class="carousel slide mb-3" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="/senactec/img/banner-01.png" height="280px" class="d-block w-100" alt="Banner 1">
              <div class="carousel-caption d-none d-md-block">
              </div>
            </div>
            <div class="carousel-item">
              <img src="/senactec/img/banner-02.png" height="280px" class="d-block w-100" alt="Banner 2">
              <div class="carousel-caption d-none d-md-block">
              </div>
            </div>
            <div class="carousel-item">
              <img src="/senactec/img/banner-03.png" height="280px" class="d-block w-100" alt="Banner 3">
              <div class="carousel-caption d-none d-md-block">
              </div>
            </div>
            <div class="carousel-item">
              <img src="/senactec/img/banner-04.png" height="280px" class="d-block w-100" alt="Banner 3">
              <div class="carousel-caption d-none d-md-block">
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
          </button>
        </div>
      </div>
    </div>
  </div>
  </div>
  <div class="text-end me-5 mb-5">
    <a href="login.php">
      <button class="btn btn-primary">Entrar no meu perfil</button>
    </a>
  </div>
  <div class="row justify-content-center">
    <div class="col-10 py-1 border overflow-y-scroll rounded" style="max-height: 500px;">
      <table class="table">
        <thead>
          <h2 class="text-center">Lista de Alunos</h2>
          <div class="row mb-4">
            <div class="col-md-8">
              <input type="search" name="search" id="filtro" class="form-control border border-black"
                placeholder="Buscar aluno...">
            </div>
            <div class="col-md-4">
              <select id="selectFiltro" name="select" class="form-select border border-black">
                <option value="" selected>Todos os cursos</option>
                <?php $user->Cursos() ?>
              </select>
            </div>
          </div>
        </thead>
        <tbody id="tbody">
          <!-- TODO: Dinâmicamente com Js -->
        </tbody>
      </table>
    </div>
  </div>
  <hr><!-- Cards -->
  <h2 class="mt-5 text-center">Projetos desenvolvidos pela turma</h2>
  <div class="row p-5 mb-5">

    <div class="col-md-3">
      <div class="card shadow text-center">
        <img src="/senactec/img/projetoADM.png" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Projeto ADM</h5>
          <a href="#" class="btn btn-primary">Ver Detalhes</a>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card shadow text-center">
        <img src="/senactec/img/projetoSenactec.png" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Projeto SENACTEC</h5>
          <a href="#" class="btn btn-primary">Ver Detalhes</a>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card shadow">
        <img src="/senactec/img/projetoEmBreve.png" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title mb-5">[ Em breve ] </h5>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card shadow">
        <img src="/senactec/img/projetoEmBreve.png" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title mb-5">[ Em breve ]</h5>
        </div>
      </div>
    </div>
  </div>