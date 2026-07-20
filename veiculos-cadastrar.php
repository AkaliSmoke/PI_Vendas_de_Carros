<?php
$titulo_da_pagina = "Cadastro do Veículo";
include "inc-conexao.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titulo_da_pagina ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="style.css">
</head>

<body class="d-flex flex-column min-vh-100">

    <?php include "inc-menu.php"; ?>

    <main class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm p-4 border-0">

                    <h1 class="text-center mb-4 h2 fw-normal text-dark">
                        Cadastro do Veículo
                    </h1>

                    <form action="veiculos-salvar.php" method="POST" enctype="multipart/form-data">

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="marca" class="form-label">Marca</label>
                                <input type="text"
                                    id="marca"
                                    name="marca"
                                    class="form-control"
                                    placeholder="Ex: Chevrolet"
                                    maxlength="50"
                                    required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="modelo" class="form-label">Modelo</label>
                                <input type="text"
                                    id="modelo"
                                    name="modelo"
                                    class="form-control"
                                    placeholder="Ex: Onix"
                                    maxlength="50"
                                    required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="ano" class="form-label">Ano</label>
                                <input type="number"
                                    id="ano"
                                    name="ano"
                                    class="form-control"
                                    placeholder="Ex: 2024"
                                    min="1900"
                                    max="2030"
                                    required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="quilometragem" class="form-label">Quilometragem</label>
                                <input type="number"
                                    id="quilometragem"
                                    name="quilometragem"
                                    class="form-control"
                                    placeholder="Ex: 35000"
                                    min="0"
                                    required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="combustivel" class="form-label">Combustível</label>
                                <select id="combustivel" name="combustivel" class="form-select" required>
                                    <option value="" selected disabled>Selecione...</option>
                                    <option value="flex">Flex</option>
                                    <option value="gasolina">Gasolina</option>
                                    <option value="etanol">Etanol</option>
                                    <option value="diesel">Diesel</option>
                                    <option value="hibrido_eletrico">Híbrido / Elétrico</option>
                                </select>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="placa" class="form-label">Placa</label>
                                <input type="text"
                                    id="placa"
                                    name="placa"
                                    class="form-control"
                                    placeholder="ABC-1234"
                                    maxlength="8"
                                    required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="cor" class="form-label">Cor</label>
                                <input type="text"
                                    id="cor"
                                    name="cor"
                                    class="form-control"
                                    placeholder="Ex: Preto"
                                    maxlength="30"
                                    required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="preco" class="form-label">Preço (R$)</label>
                                <input type="number"
                                    id="preco"
                                    name="preco"
                                    class="form-control"
                                    step="0.01"
                                    placeholder="Ex: 75000.00"
                                    min="0"
                                    required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <label for="status" class="form-label">Status</label>
                                <select id="status" name="status" class="form-select" required>
                                    <option value="disponivel">Disponível</option>
                                    <option value="reservado">Reservado</option>
                                    <option value="vendido">Vendido</option>
                                </select>
                            </div>


                         <div class="campo-formulario">
                             <label for="foto">Foto do Veículo:</label>
                             <input type="text" name="foto" id="foto">
                        </div>

                        <div class="form-check mb-4">
                            <input type="checkbox"
                                class="form-check-input"
                                id="termos"
                                name="termos"
                                value="aceito"
                                required>

                            <label class="form-check-label" for="termos">
                                Aceito os termos de uso
                            </label>
                        </div>

                        <button type="submit" class="btn btn-primary w-100 py-2 fw-semibold">
                            Cadastrar
                        </button>

                    </form>

                </div>
            </div>
        </div>
    </main>

    <?php include "inc-footer.php"; ?>

</body>

</html>