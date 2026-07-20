<?php
include 'inc/conn.php';
include 'inc/header.php';

$ids = array_filter(array_map('intval', explode(',', $_POST['veiculos'] ?? '')));
$ids = array_values(array_unique(array_filter($ids, fn ($id) => $id > 0)));
$veiculos = [];
$total = 0;

if ($ids) {
    $listaIds = implode(',', $ids);
    $sql = "SELECT * FROM tb_carro WHERE id_carro IN ($listaIds)";
    $resultado = mysqli_query($conexao, $sql);
    while ($linha = mysqli_fetch_assoc($resultado)) {
        $veiculos[] = $linha;
        $total += (float) $linha['preco'];
    }
}
?>

<h1>Carrinho</h1>

<?php if (!$veiculos): ?>
    <p class="alert alert-info">Seu carrinho está vazio.</p>
<?php else: ?>
<table class="table table-striped table-hover">
    <thead><tr><th>ID</th><th>Marca</th><th>Modelo</th><th>Ano</th><th>Quilometragem</th><th>Combustível</th><th>Foto</th><th>Cor</th><th>Preço</th><th></th></tr></thead>
    <tbody>
    <?php foreach ($veiculos as $linha): ?>
        <tr id="linha<?= (int) $linha['id_carro'] ?>">
            <td><?= (int) $linha['id_carro'] ?></td>
            <td><?= htmlspecialchars($linha['marca']) ?></td>
            <td><?= htmlspecialchars($linha['modelo']) ?></td>
            <td><?= htmlspecialchars($linha['ano']) ?></td>
            <td><?= htmlspecialchars($linha['quilometragem']) ?></td>
            <td><?= htmlspecialchars($linha['combustivel']) ?></td>
            <td><img src="<?= htmlspecialchars($linha['foto']) ?>" width="100" alt="<?= htmlspecialchars($linha['modelo']) ?>"></td>
            <td><?= htmlspecialchars($linha['cor']) ?></td>
            <td>R$ <?= number_format((float) $linha['preco'], 2, ',', '.') ?></td>
            <td><button type="button" class="btn btn-danger" onclick="fnExcluir(<?= (int) $linha['id_carro'] ?>)">Excluir</button></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
    <tfoot><tr><td colspan="8" class="text-end"><strong>Total</strong></td><td colspan="2"><span id="total" data-valor="<?= htmlspecialchars((string) $total) ?>">R$ <?= number_format($total, 2, ',', '.') ?></span></td></tr></tfoot>
</table>

<form id="form_venda" method="post" action="venda.php">
    <input type="hidden" name="produtos" id="veiculos_venda">
    <input type="hidden" name="total" id="total_venda">
    <button type="button" class="btn btn-success" onclick="fnFecharCompra()">Fechar compra</button>
</form>
<?php endif; ?>

<?php
mysqli_close($conexao);
?>
<script>window.veiculos = <?= json_encode($ids) ?>;</script>
<?php
include 'inc/footer.php';
