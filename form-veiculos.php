<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="veiculos.php" method="post">
        <label>veiculos:</label>
        <input type="text" name="veiculos"><br>
        <label>clientes:</label>
        <input type="text" name="clientes"><br>
          <input type="text" name="vendedor"><br>
        <button type="submit">Acessar</button>
        <button type="reset">Limpar</button>
    </form>
 
    <?php
    echo $_GET['mensagem'] ?? "";
    ?>

    <a href="cadastra_veiculos.php">cadastra_veiculos</a>
    <a href="cadastra_cliente.php">cadastra_cliente</a>
    <a href="cadastra_cliente.php">cadastra_vendedor</a>
</body>
</html>