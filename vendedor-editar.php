<?php
$id_vendedor = $_GET['id_vendedor'];

include "inc-conexao.php";

$sql = "select * from tb_vendedor where id_vendedor = {$id_vendedor}";
$resultado = mysqli_query($conexao, $sql);

$nome = $cpf = $email = $telefone = $senha = "";

while($linha = mysqli_fetch_assoc($resultado)){
    $nome = $linha['nome'];
    $cpf = $linha['cpf'];
    $email = $linha['email'];
    $telefone = $linha['telefone'];
    $senha = $linha['senha'];
}

include "inc-cabecalho.php";
?>

<body>
    <?php include "inc-menu.php"; ?>

    <main class="container">
        <h1>Editar Vendedor: <?= $nome ?></h1>

        <form method="post" action="vendedor-atualizar.php?id_vendedor=<?= $id_vendedor ?>">

            Nome:
            <input name="nome" value="<?= $nome ?>"> <br>

            CPF:
            <input name="cpf" value="<?= $cpf ?>"> <br>

            Telefone:
            <input name="telefone" value="<?= $telefone ?>"> <br>

            E-mail:
            <input name="email" value="<?= $email ?>"> <br>

            Senha:
            <input type="password" name="senha" value="<?= $senha ?>"> <br>

            <button type="submit">Atualizar vendedor</button>

        </form>
    </main>

<?php
mysqli_close($conexao);
include "inc-rodape.php";
?>

</body>