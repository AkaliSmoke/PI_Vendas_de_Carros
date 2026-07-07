<?php
$id_cliente = $_GET['$id_cliente'];
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$senha = $_POST['senha'];
$foto = $_POST['foto'];
 
include "inc-conexao.php";
$sql = "update tb_cliente set nome='{$nome}', cpf='{$cpf}', email={$email}, telefone='{$telefone}', senha='{$senha}', foto='{$foto}' where id={$id_cliente}";
$resultado = mysqli_query($conexao, $sql);
 
mysqli_close($conexao);
header('Location:cliente-listagem.php');
?>