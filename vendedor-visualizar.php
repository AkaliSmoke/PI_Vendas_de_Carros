<?php
$titulo_da_pagina = "Visualizar Discografia";
include "inc-cabecalho.php";
include "inc-conexao.php";

$id = $_GET['id'];
 
$sql = "select * from tb_discografia where id = $id";
$resultado = mysqli_query($conexao, $sql);
 
$foto = $artista = $album = $ano = $tipo = "";
while($linha = mysqli_fetch_assoc($resultado)){
    $artista = $linha['artista'];
    $album = $linha['nome'];
    $foto = $linha['foto'];
    $ano = $linha['ano'];
    $tipo = $linha['tipo'];
}
?>
<body>
    <?php include "inc-menu.php";?>
    <main class="container mt-5">
        <h1>Visualizar Discografia </h1>
    <div class= "letra-cor">
       <img src="<?=$foto; ?>" alt="<?=$album; ?>" class= "capa-album" > <br>
        Artista:    <?=$artista; ?> <br>
        Nome do álbum:   <?=$album; ?> <br>
        Ano de lançamento: <?=$ano; ?>    <br>
        Tipo:   <?=$tipo; ?> <br>
    </div>
    </main>
 
    <?php include "inc-rodape.php"?>
</body>
 