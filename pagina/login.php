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

<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Senac</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="bg-light">
  <?php include_once ("../include/header.php") ?>
  <main>
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
  </main>
  <?php include_once (dirname(__DIR__) . "/include/footer.php") ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>