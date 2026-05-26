<!DOCTYPE html>
<<<<<<< Updated upstream
<html lang="pt-br">

=======
<html lang="pt-BR">
>>>>>>> Stashed changes
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Veículos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <title>Cadastrar Veículos</title>
</head>
<<<<<<< Updated upstream

<body>

    <main class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6"> <!-- Deixa o formulário centralizado e com tamanho ideal -->
                <div class="card shadow p-4">

                    <h2 class="text-center mb-4">
                        Cadastrar Veículo
                    </h2>


        <div class="col-md-8">

            <div class="card shadow p-4 rounded">

                <h1 class="text-center mb-4">
                    Cadastrar Veículo
                </h1>
                <form action="cadastrar.php" method="post">

                    <div class="row">
                        <!-- Marca -->
                        <div class="col-md-6 mb-3">

                            <label class="form-label">
                                Marca
                            </label>

                            <input 
                                type="text" 
                                name="marca"
                                class="form-control"
                                placeholder="Digite a marca"
                            >
=======
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

                    </div>

                    <div class="row">

                        <!-- Ano -->
                        <div class="col-md-4 mb-3">

                            <label class="form-label">
                                Ano
                            </label>

                            <input 
                                type="number" 
                                name="ano"
                                class="form-control"
                            >



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

=======
<body>

    <div class="card-container">
        <h2>Cadastrar Veículos</h2>
        
        <form>
            <div class="form-row">
                <div class="form-group half-width">
                    <label for="marca">Marca</label>
                    <input type="text" id="marca" placeholder="Digite a marca">
                </div>
                <div class="form-group half-width">
                    <label for="modelo">Modelo</label>
                    <input type="text" id="modelo" placeholder="Digite o modelo">
                </div>
            </div>

            <div class="form-row row-three-columns">
                <div class="form-group">
                    <label for="ano">Ano</label>
                    <input type="text" id="ano">
                </div>
                <div class="form-group">
                    <label for="quilometragem">Quilometragem</label>
                    <input type="text" id="quilometragem">
                </div>
                 <div class="campo-formulario">
                  <label for="foto">Foto:</label>
                  <input type="text" name="foto" id="foto">
                </div>
                <div class="form-group">
                    <label for="preco">Preço</label>
                    <input type="text" id="preco">
                </div>
            </div>

            <div class="form-group full-width">
                <label for="combustivel">Combustível</label>
                <select id="combustivel">
                    <option value="gasolina">Gasolina</option>
                    <option value="etanol">Etanol</option>
                    <option value="diesel">Diesel</option>
                    <option value="flex">Flex</option>
                </select>
            </div>

            <div class="form-group full-width">
                <label for="cor">Cor</label>
                <input type="text" id="cor" placeholder="Digite a cor">
            </div>

            <button type="submit" class="btn-submit">Cadastrar</button>
        </form>
    </div>

</body>
>>>>>>> Stashed changes
</html>