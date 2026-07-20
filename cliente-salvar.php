<?php
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$foto = $_POST['foto'];

include "inc-conexao.php";

$sql = "insert into tb_cliente(nome, cpf, email, telefone, foto)
values ('$nome', '$cpf', '$email', '$telefone', '$foto')";

$resultado = mysqli_query($conexao, $sql);

mysqli_close($conexao);

header('location:cliente-listagem.php');
?>