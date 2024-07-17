<style>
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