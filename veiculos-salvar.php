<?php

$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$ano = $_POST['ano'];
$quilometragem = $_POST['quilometragem'];
$combustivel = $_POST['combustivel'];
$foto = $_POST['foto'];
$cor = $_POST['cor'];
$preco = $_POST['preco'];

$conexao = mysqli_connect("localhost", "root", "", "db_carros_projeto_integrador");

if(!$conexao){
    die("Erro: " . mysqli_connect_error());
}

$sql = "INSERT INTO tb_carro
(marca, modelo, ano, quilometragem, combustivel, foto, cor, preco)
VALUES
('$marca', '$modelo', '$ano', '$quilometragem', '$combustivel', '$foto', '$cor', '$preco')";

$resultado = mysqli_query($conexao, $sql);

if($resultado){
    mysqli_close($conexao);
    header("Location: veiculos-listagem.php");
    exit;
}else{
    echo "Erro: " . mysqli_error($conexao);
}

?>