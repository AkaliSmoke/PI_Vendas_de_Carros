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

        <div class="col-md-8">

            <div class="card shadow p-4 rounded">

                <h1 class="text-center mb-4">
                    Cadastrar Veículo
                </h1>

<<<<<<< HEAD
        <label>Cor:</label><br>
        <input type="text" name="cor"><br>
       
        <label for="foto">Foto:</label>
        <input type="text" name="foto" id="foto">
          
        <label>Preço:</label><br>
        <input type="number" name="preco"><br><br>
=======
                <form action="cadastrar.php" method="post">

                    <div class="row">
>>>>>>> 338b8132802efe19bcd574d72f05bf034f5a5807

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

                        </div>

                        <!-- Modelo -->
                        <div class="col-md-6 mb-3">

                            <label class="form-label">
                                Modelo
                            </label>

                            <input 
                                type="text" 
                                name="modelo"
                                class="form-control"
                                placeholder="Digite o modelo"
                            >

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

                        </div>

                        <!-- Quilometragem -->
                        <div class="col-md-4 mb-3">

                            <label class="form-label">
                                Quilometragem
                            </label>

                            <input 
                                type="number" 
                                name="quilometragem"
                                class="form-control"
                            >

                        </div>

                        <!-- Preço -->
                        <div class="col-md-4 mb-3">

                            <label class="form-label">
                                Preço
                            </label>

                            <input 
                                type="number" 
                                name="preco"
                                class="form-control"
                            >

                        </div>

                    </div>

                    <!-- Combustível -->
                    <div class="mb-3">

                        <label class="form-label">
                            Combustível
                        </label>

                        <select 
                            name="combustivel"
                            class="form-select"
                        >

                            <option>Gasolina</option>
                            <option>Flex</option>
                            <option>Diesel</option>
                            <option>Elétrico</option>

                        </select>

                    </div>

                    <!-- Cor -->
                    <div class="mb-4">

                        <label class="form-label">
                            Cor
                        </label>

                        <input 
                            type="text" 
                            name="cor"
                            class="form-control"
                            placeholder="Digite a cor"
                        >

                    </div>

                    <!-- Botão -->
                    <button 
                        type="submit"
                        class="btn btn-primary w-100"
                    >

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
