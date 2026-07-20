<?php
$titulo_da_pagina = "Visualizar Vendedor";
include "inc-cabecalho.php";
include "inc-conexao.php";

$id_vendedor = $_GET['id_vendedor'];

$sql = "select * from tb_vendedor where id_vendedor = $id_vendedor";
$resultado = mysqli_query($conexao, $sql);

$nome = $cpf = $email = $telefone = $senha = $foto = $nome_da_loja = $endereco = $foto_da_loja = "";

while($linha = mysqli_fetch_assoc($resultado)){
    $nome = $linha['nome'];
    $cpf = $linha['cpf'];
    $email = $linha['email'];
    $telefone = $linha['telefone'];
    $senha = $linha['senha'];
    $foto = $linha['foto'];
    $nome_da_loja = $linha['nome_da_loja'];
    $endereco = $linha['endereco'];
    $foto_da_loja = $linha['foto_da_loja'];
}
?>

<body>
    <?php include "inc-menu.php"; ?>

    <main class="container mt-5">
        <h1>Visualizar Vendedor</h1>

        <div class="letra-cor">
            <img src="<?= $foto; ?>" alt="<?= $nome; ?>" class="capa-vendedor"> <br>

            Nome: <?= $nome; ?> <br>
            CPF: <?= $cpf; ?> <br>
            E-mail: <?= $email; ?> <br>
            Telefone: <?= $telefone; ?> <br>
            Senha: <?= $senha; ?> <br>
            Nome da Loja: <?= $nome_da_loja; ?> <br>
            Endereço: <?= $endereco; ?> <br>

            <br>

            <img src="<?= $foto_da_loja; ?>" alt="<?= $nome_da_loja; ?>" class="capa-vendedor">
        </div>
    </main>

    <?php include "inc-rodape.php"; ?>
</body>