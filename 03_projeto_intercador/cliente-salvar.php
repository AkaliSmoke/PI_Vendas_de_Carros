<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cliente</title>
</head>
<body>
    <h1>cliente</h1>
    <form action="cliente-cadastrar.php" method="post">
        <label>cliente:</label>
        <input type="text" name="veiculos"><br>
        <label>clientes:</label>
        <input type="text" name="clientes"><br>
        <button type="submit">Acessar</button>
        <button type="reset">Limpar</button>
    </form>
 
    <?php
    echo $_GET['mensagem'] ?? "";
    ?>
    <a href="cliente-cadastrar.php">cliente-cadastrar</a>

    <?php
        $arquivo = fopen("album_db.txt", "r");
        while(!feof($arquivo)){
                $linha = fgets($arquivo);
                echo "$linha<br>";
        }
        fclose($arquivo);
        ?>
</body>
</html>