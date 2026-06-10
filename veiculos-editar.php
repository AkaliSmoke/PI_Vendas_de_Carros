<?php
$id = $_GET['id'];
include "inc-conexao.php";
$sql = "select * from tb_discografia where id = {$id}";
$resultado = mysqli_query($conexao, $sql);
$nome = $artista = $foto = $tipo = $ano = "";
while($linha = mysqli_fetch_assoc($resultado)){
    $Marca = $linha['marca'];
    $Modelo = $linha ['modelo'];
    $Ano = $linha ['Ano'];
    $Quilometragem = $linha ['quilometragem'];
    $Combustível = $linha ['Combustivel'];
    $Foto = $linha ['foto'];
    $Cor= $linha ['Cor'];
    $Preço = $linha ['Preço'];
}


include "inc-cabecalho.php";
?>