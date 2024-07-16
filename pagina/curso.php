<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portifólio - SenacTec</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <!-- incluir a header -->
    <?php
    include_once ("../include/header.php");
    ?>
    <main>
        <section>
            <div class="container-fluid bg-secondary-subtle">
                <div class="row">
                    <div class="col">
                        <h1 class="text-center text-primary fw-bold fs-3 mt-3">Curso de Desenvolvimento</h1>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-10 text-center">
                        <p class="text-center">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti mollitia nobis, provident et repellendus ipsa delectus est corrupti doloremque dolorem similique error quos, sapiente soluta officiis exercitationem, sed consequuntur. Id.
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam iure nesciunt nulla reiciendis. Accusamus unde dignissimos, hic at nulla sint laboriosam quo doloribus officiis suscipit maiores voluptate ratione quos non!
                        </p>
                        <a href="">
                        <button class="btn btn-primary mt-1 mb-4">Conheça o Senac</button>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-6">
                        <div class='card border-0 d-flex flex-row'>
                            <img src="../img/img-04.avif" height="160px" alt="" class="img-fluid" style='width: 14rem;'>
                            <div class='card-body'>
                                <h4 class="text-primary fw-bold fs-4">Desenvolvimento Web</h4>
                                <p class='card-text text-truncate' style='width: 14rem;'>O Programador Web estrutura em front-end</p>
                                <a href='#' class='btn btn-primary'>Continue lendo</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class='card border-0 d-flex flex-row'>
                            <img src="../img/img-04.avif" height="160px" alt="" class="img-fluid" style='width: 14rem;'>
                            <div class='card-body'>
                                <h4 class="text-primary fw-bold fs-4">Desenvolvimento Web</h4>
                                <p class='card-text text-truncate' style='width: 14rem;'>O Programador Web estrutura em front-end</p>
                                <a href='#' class='btn btn-primary'>Continue lendo</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Incluir o footer -->
    <?php
    include_once ("../include/footer.php");
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
