<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <title>Cadastrar Veículo</title>
</head>

<body>

    <main class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6"> <!-- Deixa o formulário centralizado e com tamanho ideal -->
                <div class="card shadow p-4">

                    <h2 class="text-center mb-4">
                        Cadastrar Veículo
                    </h2>

                    <form>

                        <!-- 1. Marca -->
                        <div class="mb-3">
                            <label class="form-label">Marca</label>
                            <input type="text" class="form-control" placeholder="Digite a marca">
                        </div>

                        <!-- 2. Modelo -->
                        <div class="mb-3">
                            <label class="form-label">Modelo</label>
                            <input type="text" class="form-control" placeholder="Digite o modelo">
                        </div>

                        <!-- 3. Ano -->
                        <div class="mb-3">
                            <label class="form-label">Ano</label>
                            <input type="number" class="form-control" placeholder="Digite o ano">
                        </div>

                        <!-- 4. Quilometragem -->
                        <div class="mb-3">
                            <label class="form-label">Quilometragem</label>
                            <input type="text" class="form-control" placeholder="Digite a quilometragem">
                        </div>

                        <!-- 5. Preço -->
                        <div class="mb-3">
                            <label class="form-label">Preço</label>
                            <input type="text" class="form-control" placeholder="Digite o preço">
                        </div>

                        <!-- 6. Combustível -->
                        <div class="mb-3">
                            <label class="form-label">Combustível</label>
                            <select class="form-select">
                                <option selected>Gasolina</option>
                                <option>Etanol</option>
                                <option>Flex</option>
                                <option>Diesel</option>
                                <option>Híbrido / Elétrico</option>
                            </select>
                        </div>

                        <!-- 7. Cor -->
                        <div class="mb-4">
                            <label class="form-label">Cor</label>
                            <input type="text" class="form-control" placeholder="Digite a cor">
                        </div>

                        <!-- Botão Cadastrar -->
                        <button type="submit" class="btn btn-primary w-100">
                            Cadastrar
                        </button>

                    </form>

                </div>
            </div>
        </div>
    </main>



    <br>
    <a href="form_veiculos.php">Ver Veículos</a>

</body>

</html>