<?php
$id_carro = $_GET['id_carro'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$ano = $_POST['ano'];
$quilometragem = $_POST['quilometragem'];
$combustivel = $_POST['combustivel'];
$foto = $_POST['foto'];
$cor = $_POST['cor'];
$preco = $_POST['preco'];


 
include "inc-conexao.php";
$sql = "update tb_carro set marca='{$marca}', modelo='{$modelo}', ano={$ano}, quilometragem='{$quilometragem}', combustivel='{$combustivel}', foto='{$foto}', combustivel='{$combustivel}', cor='{$cor}', preco='{$preco}' where id_carro={$id_carro}";
$resultado = mysqli_query($conexao, $sql);
 
mysqli_close($conexao);
header('Location:vendedor-listagem.php');
?>