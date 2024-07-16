<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portifólio - SenacTec</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        .scrollable-list {
            max-height: 200px;
            overflow-y: auto;
        }
    </style>
</head>

<body>
    <!-- incluir a header -->
    <?php include_once("../include/header.php"); ?>

    <!-- incluir o main -->
    <main>
        <section>
            <div class="container">
                <div class="row mt-4">
                    <div class="col-lg-3 fs-4">
                        <h2>Oportunidades Senac</h2>
                        <p>Conheça o projeto SenacTec</p>
                        <button class="btn btn-dark">Ver mais</button>
                    </div>
                    <div class="col-lg-5">
                        <div id="carouselExample" class="carousel slide">
                            <div class="carousel-inner">
                                <?php
                                $limite = 4;
                                $contar = 1;
                                while ($contar <= $limite) {
                                    $activeClass = ($contar === 1) ? ' active' : '';
                                    echo "
                                    <div class='carousel-item$activeClass'>
                                        <img src='../img/banner1-0$contar.png' class='d-block w-100' style='height: 220px;' alt='...'>
                                    </div>
                                    ";
                                    $contar++;
                                }
                                ?>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="scrollable-list">
                            <ul class="list-group">
                                <li class="list-group-item d-flex">
                                    <img src="../img/anuncio-01.jpg" class="me-3" height="100px" alt="">
                                    <h6 class="mt-4">Desenvolvedor FullStack</h6>
                                </li>
                                <li class="list-group-item d-flex">
                                    <img src="../img/anuncio-02.jpeg" class="me-3" height="100px" alt="">
                                    <h6 class="mt-4">Desenvolvedor FullStack</h6>
                                </li>
                                <li class="list-group-item d-flex">
                                    <img src="../img/anuncio-03.webp" class="me-3" height="100px" alt="">
                                    <h6 class="mt-4">Desenvolvedor FullStack</h6>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row mt-3">
                    <div class="col d-flex gap-2 justify-content-center flex-wrap">
                        <a href="" class="btn btn-dark d-flex align-items-center gap-2">
                            <i class="bi bi-facebook"></i> Facebook
                        </a>
                        <a href="" class="btn btn-dark d-flex align-items-center gap-2">
                            <i class="bi bi-github"></i> Github
                        </a>
                        <a href="" class="btn btn-dark d-flex align-items-center gap-2">
                            <i class="bi bi-google"></i> Google
                        </a>
                        <a href="" class="btn btn-dark d-flex align-items-center gap-2">
                            <i class="bi bi-linkedin"></i> Linkedin
                        </a>
                        <a href="" class="btn btn-dark d-flex align-items-center gap-2">
                            <i class="bi bi-twitter"></i> Twitter
                        </a>
                        <a href="" class="btn btn-dark d-flex align-items-center gap-2">
                            <i class="bi bi-whatsapp"></i> Whatsapp
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="my-4">
            <div class="container">
                <div class="row">
                    <div class="col fs-4 text-secondary text-center">Conheça Nossos colaboradores</div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col d-flex justify-content-center flex-wrap">
                        <div class="card m-2" style="width: 18rem;">
                            <img src="/senactec/img/img-01.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <a href="#" class="link-secondary link-underline link-underline-opacity-0 link-opacity-50-hover">
                                    <p class="card-text fw-lighter">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </a>
                            </div>
                        </div>
                        <div class="card m-2" style="width: 18rem;">
                            <img src="/senactec/img/img-01.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <a href="#" class="link-secondary link-underline link-underline-opacity-0 link-opacity-50-hover">
                                    <p class="card-text fw-lighter">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </a>
                            </div>
                        </div>
                        <div class="card m-2" style="width: 18rem;">
                            <img src="/senactec/img/img-01.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <a href="#" class="link-secondary link-underline link-underline-opacity-0 link-opacity-50-hover">
                                    <p class="card-text fw-lighter">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Incluir o footer -->
    <?php include_once("../include/footer.php"); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
