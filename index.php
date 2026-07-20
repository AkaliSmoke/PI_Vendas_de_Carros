<?php
include 'inc/conn.php';
include 'inc/header.php';
 include "inc-menu.php";

$sql = 'SELECT * FROM tb_carro';
$resultado = mysqli_query($conexao, $sql);
?>

<h1>Veículos</h1>

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>ID</th><th>Marca</th><th>Modelo</th><th>Ano</th><th>Quilometragem</th>
            <th>Combustível</th><th>Foto</th><th>Cor</th><th>Preço</th><th></th>
        </tr>
    </thead>
    <tbody>
    <?php while ($linha = mysqli_fetch_assoc($resultado)): ?>
        <tr>
            <td><?= (int) $linha['id_carro'] ?></td>
            <td><?= htmlspecialchars($linha['marca']) ?></td>
            <td><?= htmlspecialchars($linha['modelo']) ?></td>
            <td><?= htmlspecialchars($linha['ano']) ?></td>
            <td><?= htmlspecialchars($linha['quilometragem']) ?></td>
            <td><?= htmlspecialchars($linha['combustivel']) ?></td>
            <td><img src="<?= htmlspecialchars($linha['foto']) ?>" width="80" alt="<?= htmlspecialchars($linha['modelo']) ?>"></td>
            <td><?= htmlspecialchars($linha['cor']) ?></td>
            <td>R$ <?= number_format((float) $linha['preco'], 2, ',', '.') ?></td>
            <td><button type="button" class="btn btn-outline-success" onclick="fnAdicionarNoCarrinho(<?= (int) $linha['id_carro'] ?>)"><i class="bi bi-cart-plus"></i></button></td>
        </tr>
    <?php endwhile; ?>
    </tbody>
</table>

<?php
mysqli_close($conexao);
include 'inc/footer.php';
