<?php
include "inc-conexao.php";

$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$senha = $_POST["senha"];

$sql = "insert into tb_vendedor(nome, cpf, email, telefone, senha) values ('$nome', '$cpf', '$email', '$telefone', '$senha')";
$resultado = mysqli_query($conexao, $sql);

if($resultado){
    echo "cadastrado com sucesso";
}else{
    echo "deu algum problema";
}

mysqli_close($conexao);
?>