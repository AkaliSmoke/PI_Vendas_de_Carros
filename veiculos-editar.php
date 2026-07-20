<?php
$id_carro = $_GET['id_carro'];

include "inc-conexao.php";

$sql = "select * from tb_carro where id_carro = {$id_carro}";
$resultado = mysqli_query($conexao, $sql);

$marca = $modelo = $ano = $quilometragem = $foto = $cor = $preco = $combustivel = "";

while($linha = mysqli_fetch_assoc($resultado)){
    $marca = $linha['marca'];
    $modelo = $linha['modelo'];
    $ano = $linha['ano'];
    $quilometragem = $linha['quilometragem'];
    $foto = $linha['foto'];
    $cor = $linha['cor'];
    $preco = $linha['preco'];
    $combustivel = $linha['combustivel'];
}

include "inc-cabecalho.php";
?>

<body>

    <?php include "inc-menu.php"; ?>

    <main class="container">

        <h1>Editar Veículo: <?= $marca ?></h1>

        <form method="post" action="veiculo-atualizar.php?id_carro=<?= $id_carro ?>">

            Marca:
            <input name="marca" value="<?= $marca ?>"> <br>

            Modelo:
            <input name="modelo" value="<?= $modelo ?>"> <br>

            Ano:
            <input type="number" name="ano" value="<?= $ano ?>"> <br>

            Quilometragem:
            <input type="number" name="quilometragem" value="<?= $quilometragem ?>"> <br>

            Foto:
            <input name="foto" value="<?= $foto ?>"> <br>

            Cor:
            <input name="cor" value="<?= $cor ?>"> <br>

            Preço:
            <input type="number" step="10.2" name="preco" value="<?= $preco ?>"> <br>

            Combustível:
            <select name="combustivel">
                <option value=""></option>
                <option value="Gasolina" <?= $combustivel == "Gasolina" ? "selected" : "" ?>>Gasolina</option>
                <option value="Etanol" <?= $combustivel == "Etanol" ? "selected" : "" ?>>Etanol</option>
                <option value="Flex" <?= $combustivel == "Flex" ? "selected" : "" ?>>Flex</option>
                <option value="Diesel" <?= $combustivel == "Diesel" ? "selected" : "" ?>>Diesel</option>
                <option value="Elétrico" <?= $combustivel == "Elétrico" ? "selected" : "" ?>>Elétrico</option>
                <option value="Híbrido" <?= $combustivel == "Híbrido" ? "selected" : "" ?>>Híbrido</option>
            </select> <br>

            <button type="submit">Atualizar veículo</button>

        </form>

    </main>

<?php
mysqli_close($conexao);
include "inc-rodape.php";
?>

</body>