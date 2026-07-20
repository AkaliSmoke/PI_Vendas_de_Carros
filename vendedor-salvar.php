<?php

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$senha = $_POST['senha'];
$nome_da_loja = $_POST['nome_da_loja'];
$endereco = $_POST['endereco'];

$conexao = mysqli_connect("localhost", "root", "", "db_carros_projeto_integrador");

if (!$conexao) {
    echo "erro";
    die("<h3>Erro</h3> " . mysqli_connect_error());
}

$sql = "INSERT INTO tb_vendedor(nome, cpf, email, telefone, senha, nome_da_loja, endereco)
VALUES ('$nome', '$cpf', '$email', '$telefone', '$senha', '$nome_da_loja', '$endereco')";

$resultado = mysqli_query($conexao, $sql);

if ($resultado) {
    echo "Cadastrado com sucesso";
} else {
    echo "Deu algum problema";
}

mysqli_close($conexao);

header("location:vendedor-listagem.php");

?>