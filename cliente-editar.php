<?php
$id_cliente = $_GET['id_cliente'];
include "inc-conexao.php";
$sql = "select * from tb_cliente where id_cliente ={$id_cliente}";
$resultado = mysqli_query($conexao, $sql);
$nome = $cpf = $email = $telefone = $senha = $foto ="";
while($linha = mysqli_fetch_assoc($resultado)){
$nome = $linha['nome'];
$$cpf = $linha['$cpf'];
$email = $linha['email'];
$telefone = $linha['telefone'];
$senha = $linha['senha'];
$foto = $linha['foto'];
}

include "inc-cabecalho.php";
?>
