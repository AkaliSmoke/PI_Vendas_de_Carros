<?php
$marca = $_POST["marca"];
$modelo = $_POST["modelo"];
$ano = $_POST["ano"];
$quilometragem = $_POST["quilometragem"];
$combustivel = $_POST["combustivel"];
$foto = $_POST["foto"];
$cor = $_POST["cor"];
$preco = $_POST["preco"];

$conexao = mysqli_connect("localhost", "root", "", "db_carros");
if(!$conexao){
    echo "erro";
    die("<h3>Erro</h3> " . mysqli_connect_error());
}
 
 
$sql = "insert into tb_carros(marca, modelo, ano, quilometragem, combustivel, foto, cor, preco) values ('$marca', '$modelo', '$ano', '$quilometragem', '$combustivel', '$cor', '$preco')";
 
$resultado = mysqli_query($conexao, $sql);
if($resultado){
    echo "cadastrado com sucesso";
}else{
    echo "deu algum problema";
}
 
mysqli_close($conexao);
header('location:veiculos-listagem.php');
?>