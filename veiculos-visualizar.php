<?php
include "inc-conexao.php";

$id_carro = $_GET['id_carro'];

$sql = "select * from tb_carro where id_carro = {$id_carro}";
$resultado = mysqli_query($conexao, $sql);

while($linha = mysqli_fetch_assoc($resultado)){
    $marca = $linha['marca'];
    $modelo = $linha['modelo'];
    $ano = $linha['ano'];
    $quilometragem = $linha['quilometragem'];
    $combustivel = $linha['combustivel'];
    $foto = $linha['foto'];
    $cor = $linha['cor'];
    $preco = $linha['preco'];
}