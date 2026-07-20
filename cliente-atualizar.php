<?php
$id_vendedor = $_GET['id_vendedor'];
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$nome_da_loja = $_POST['nome_da_loja'];

 
include "inc-conexao.php";
$sql = "update tb_discografia set nome='{$nome}', cpf='{$cpf}', email={$email}, telefone='{$telefone}', nome_da_loja='{$nome_da_loja}' where id_vendedor={$id_vendedor}";
$resultado = mysqli_query($conexao, $sql);
 
mysqli_close($conexao);
header('Location:vendedor-listagem.php');
?>