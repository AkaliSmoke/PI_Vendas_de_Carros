<?php
$id = $_GET['id'];

include "inc-conexao.php";

$sql = "delete from tb_cliente where id_cliente = ($id)";

$resultado = mysqli_query($conexao, $sql);

mysqli_close($conexao);

header('location:cliente-listagem.php');
?>