<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SenacTec</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
    <!-- incluir a header -->
    <?php
    include_once("classes/MostrarUrl.php");
    include_once("include/header.php");
    $url = new MostrarUrl();
    ?>
    <main>
        <?php
        if(isset($_GET["pagina"])){
            $url->trocarUrl($_GET["pagina"]);
        } else {
            $url->trocarUrl("home");
        }
        ?>
    </main>
    <!-- Incluir o footer -->
    <?php
    include_once("include/footer.php");
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
