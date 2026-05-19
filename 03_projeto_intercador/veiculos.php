<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Veículo</title>
</head>
<body>
   
    <h1>Cadastrar</h1>
    <form action="cadastrar.php" method="post">
        <label>Marca:</label><br>
        <input type="text" name="marca"><br>

        <label>Modelo:</label><br>
        <input type="text" name="modelo"><br>

        <label>Ano:</label><br>
        <input type="number" name="ano"><br>

        <label>Quilometragem:</label><br>
        <input type="number" name="quilometragem"><br>

        <label>Combustível:</label><br>
        <input type="text" name="combustivel"><br>

        <label>Cor:</label><br>
        <input type="text" name="cor"><br>

        <label>Preço:</label><br>
        <input type="number" name="preco"><br><br>

        <button type="submit">Cadastrar</button>
    </form>

    <br>
    <a href="form_veiculos.php">Ver Veículos</a>
</body>
</html>
