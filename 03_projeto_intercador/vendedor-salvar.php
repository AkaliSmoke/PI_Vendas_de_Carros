<?php
$nome = $_POST("nome");
$telefone = $_POST("telefone");
$idade = $_POST("idade");
$estado = $_POST("estados");
$cidade = $_POST("cidade");

$arquivo = fopen("cliente_db.txt", "a");
fwrite($arquivo, "$nome \t $telefone  \t $idade \t $estado \t $cidade \n");
fclose($arquivo);
header("location: album-cadastrar.php")
?>