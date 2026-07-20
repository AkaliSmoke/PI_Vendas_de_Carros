<?php
$titulo_da_pagina = "Visualizar Cliente";
include "inc-cabecalho.php";
include "inc-conexao.php";

$id = $_GET['id'];

$sql = "select * from tb_cliente where id_cliente = $id";
$resultado = mysqli_query($conexao, $sql);

$foto = $nome = $cpf = $email = $telefone = "";

while($linha = mysqli_fetch_assoc($resultado)){
    $nome = $linha['nome'];
    $cpf = $linha['cpf'];
    $email = $linha['email'];
    $telefone = $linha['telefone'];
    $foto = $linha['foto'];
}
?>

<body>

    <?php include "inc-menu.php"; ?>

    <main class="container mt-5">

        <h1>Visualizar Cliente</h1>

        <div class="letra-cor">

            <img src="<?= $foto; ?>" alt="<?= $nome; ?>" class="capa-album"> <br>

            Nome: <?= $nome; ?> <br>
            CPF: <?= $cpf; ?> <br>
            E-mail: <?= $email; ?> <br>
            Telefone: <?= $telefone; ?> <br>

        </div>

    </main>

    <?php include "inc-rodape.php"; ?>

</body>
</html>