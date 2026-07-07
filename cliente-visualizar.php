<?php
$titulo_da_pagina = "cliente visualizar";
include "inc-cabecalho.php";
include "inc-conexao.php";

$id_cliente = $_GET['id_cliente'];
 
$sql = "select * from tb_cliente where id = $id_cliente";
$resultado = mysqli_query($conexao, $sql);
 
$id_cliente = $nome = $telefone = $foto = $email = "";
while($linha = mysqli_fetch_assoc($resultado)){
    $artista = $linha['id_cliente'];
    $album = $linha['nome'];
    $foto = $linha['telefone'];
    $ano = $linha['foto'];
    $tipo = $linha['email'];
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
 