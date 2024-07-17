<?php
session_start();
require_once (dirname(__DIR__) . "/class/User.php");

$user = new User();

// Se as informações recebidas for POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Recebe os Dados Passados pelo usuário
  $registro = $user->Register([
    'nome' => $_POST['nome'],
    'data' => $_POST['data'],
    'curso' => $_POST['curso'],
    'email' => $_POST['email'],
    'senha' => $_POST['senha'],
  ]);

  if ($registro['erro']) {
    echo $registro['erro'];
  } else if ($registro['success']) {
    header('location: /senactec/pagina/profile.php?id='.$_SESSION['user_id']);
  }
}
?>

<section class="border bg-light py-5">
  <div class="container">
    <div class="row justify-content-center">
     <div class="col-md-8 col-lg-10">
      <div class="card shadow-lg border-0">
       <div class="row g-0">
        <div class="col-md-6">
          <img src="/senactec/img/imgForm.jpeg" class="img-fluid rounded-start h-100">
        </div>
        <div class="col-md-6 bg-secondary text-white p-4 rounded-end">
          <form action="cadastro.php" method="POST">
            <div class="text-center mb-1">
              <h5 class="fw-bolder">Cadastro de Alunos</h5>
            </div>
            <div class="mb-1">
              <label for="nome" class="form-label">Nome Completo</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="bi bi-person-fill-add"></i></span>
                  <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome completo"
                  required>
                </div>
              </div>
              <div class="mb-1">
               <label for="data" class="form-label">Data de Nascimento</label>
                 <div class="input-group">
                   <span class="input-group-text"><i class="bi bi-calendar-date"></i></span>
                      <input type="date" name="data" id="data" class="form-control" placeholder="Data de nascimento"
                      required>
                  </div>
                </div>
                <div class="mb-1">
                  <label for="curso" class="form-label">Curso</label>
                    <div class="input-group">
                      <span class="input-group-text"><i class="bi bi-book"></i></span>
                      <select class="form-select" name="curso" id="curso" required>
                        <?php 
                          $user->Cursos();
                        ?>
                      </select>
                    </div>
                </div>
                <div class="mb-1">
                  <label for="email" class="form-label">E-mail</label>
                   <div class="input-group">
                     <span class="input-group-text"><i class="bi bi-envelope-at-fill"></i></span>
                     <input type="email" name="email" id="email" class="form-control" placeholder="name@example.com"
                      required>
                    </div>
                </div>
                <div class="mb-1">
                  <label for="password" class="form-label">Senha</label>
                    <div class="input-group">
                     <span class="input-group-text"><i class="bi bi-key-fill"></i></span>
                      <input type="password" name="senha" id="password" class="form-control" minlength="8"
                      placeholder="Senha" required>
                    </div>
                    <div class="text-center my-2">A senha deve ter no mínimo 8 caracteres</div>
                </div>
                <div class="d-grid gap-2 mb-3">
                  <button type="submit" class="btn btn-dark">Cadastrar</button>
                    <div class="text-center">
                      <span>Já é aluno?</span>
                      <a href="login.php" class="link-light">Entrar</a>
                    </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>