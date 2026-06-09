<?php
$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$senha = $_POST["senha"];

if($resultado){
    echo "cadastrado com sucesso";
}else{
    echo "deu algum problema";
}
 
include "inc-conexao.php";
$sql = "insert into tb_vendedor(nome, cpf, email, telefone, senha) values ('$nome', '$cpf', '$email', '$telefone', '$senha')";
$resultado = mysqli_query($conexao, $sql);

mysqli_close($conexao);
?>