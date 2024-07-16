<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portifólio - SenacTec</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<style>
    
.rating-stars-container {
  width: 100%;
  height: 30px;
  display: flex;
  flex-direction: row-reverse;
  align-items: center;
  justify-content: center;
}
.star-label svg {
  fill: rgb(210, 210, 210);
  width: 20px;
  height: auto;
}
.rating-stars-container input {
  appearance: unset;
}
.rating-stars-container input:hover ~ .star-label svg {
  fill: rgb(255, 204, 185);
}
.rating-stars-container input:checked ~ .star-label svg {
  fill: rgb(255, 102, 47);
  animation: slide-in-fwd-center 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94) both;
}
@keyframes slide-in-fwd-center {
  0% {
    transform: scale(1.6);
  }
  100% {
    transform: scale(1);
  }
}
    
.card {
    border-radius: 15px;
}

.card-body {
    padding: 30px;
}

.form-label {
    font-weight: bold;
    color: #495057;
}

.form-control:focus, .form-select:focus {
    border-color: #007bff;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.25);
}

.btn-primary {
    background-color: #007bff;
    border-color: #007bff;
    transition: background-color 0.3s, border-color 0.3s;
}

.btn-primary:hover {
    background-color: #0056b3;
    border-color: #004085;
}

.btn-secondary {
    background-color: #6c757d;
    border-color: #6c757d;
    transition: background-color 0.3s, border-color 0.3s;
}

.btn-secondary:hover {
    background-color: #5a6268;
    border-color: #545b62;
}

</style>
</head>

<body>
    <!-- incluir a header -->
    <?php
    include_once ("../include/header.php");
    ?>
    <section>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <h3 class="card-title text-center text-primary">Feedback</h3>
                        <form>
                            <div class="mb-3">
                                <label for="name" class="form-label">Nome</label>
                                <input type="text" class="form-control" id="name" placeholder="Seu nome">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="nome@exemplo.com">
                            </div>
                            <div class="mb-3">
                                            
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Mensagem</label>
                                <textarea class="form-control" id="message" rows="4" placeholder="Escreva sua mensagem"></textarea>
                            </div>
                                            <div class="rating-stars-container my-3">
                                                <input value="star-5" name="star" id="star-5" type="radio" />
                                                <label for="star-5" class="star-label">
                                                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                    d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"
                                                    pathLength="360"
                                                    ></path>
                                                </svg>
                                                </label>
                                                <input value="star-4" name="star" id="star-4" type="radio" />
                                                <label for="star-4" class="star-label">
                                                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                    d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"
                                                    pathLength="360"
                                                    ></path>
                                                </svg>
                                                </label>
                                                <input value="star-3" name="star" id="star-3" type="radio" />
                                                <label for="star-3" class="star-label">
                                                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                    d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"
                                                    pathLength="360"
                                                    ></path>
                                                </svg>
                                                </label>
                                                <input value="star-2" name="star" id="star-2" type="radio" />
                                                <label for="star-2" class="star-label">
                                                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                    d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"
                                                    pathLength="360"
                                                    ></path>
                                                </svg>
                                                </label>
                                                <input value="star-1" name="star" id="star-1" type="radio" />
                                                <label for="star-1" class="star-label">
                                                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                    d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"
                                                    pathLength="360"
                                                    ></path>
                                                </svg>
                                                </label>
                                            </div>
                            <div class="d-flex justify-content-center">
                                <button type="reset" class="btn btn-secondary mx-2 px-4">Limpar</button>
                                <button type="submit" class="btn btn-primary mx-2 px-4">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!-- Incluir o footer -->
    <?php
    include_once ("../include/footer.php");
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>