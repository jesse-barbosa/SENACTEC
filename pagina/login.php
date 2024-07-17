<?php
require_once (dirname(__DIR__) . "/class/User.php");
session_start();

if (@$_SESSION['user_id']) {
  header('location: /senactec/pagina/profile.php?id='.$_SESSION['user_id']);
}

$user = new User();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $login = $user->login([
    'email' => $_POST['email'],
    'senha' => $_POST['senha'],
  ]);

  if ($login['erro']) {
    echo $login['erro'];
  }
  else if ($login['success']) {
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
                  <img src="../img/imgForm.jpeg" class="img-fluid rounded-start h-100" alt="...">
                </div>
                <div class="col-md-6 bg-secondary text-white p-4 rounded-end">
                  <form action="login.php" method="POST">
                    <div class="text-center mb-4">
                      <h5 class="fw-bolder">Curso Desenvolvedor Full Stack</h5>
                      <p class="fs-5">Entrar</p>
                    </div>
                    <div class="mb-3">
                      <label for="email" class="form-label">E-mail</label>
                      <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-filetype-doc"></i></span>
                        <input type="email" name="email" id="email" class="form-control" placeholder="name@example.com">
                      </div>
                    </div>
                    <div class="mb-3">
                      <label for="senha" class="form-label">Matrícula</label>
                      <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-0-square"></i></span>
                        <input type="password" name="senha" id="senha" class="form-control" placeholder="Senha">
                      </div>
                    </div>
                    <div class="d-grid gap-2 mb-3">
                      <button type="submit" class="btn btn-dark">Entrar</button>
                    </div>
                    <div class="text-center">
                      <span>Não é aluno?</span>
                      <a href="cadastro.php" class="link-light">Cadastrar</a>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>