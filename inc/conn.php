<?php
// Arquivo de conexão usado pelas páginas do carrinho.
$conexao = mysqli_connect('localhost', 'root', '', 'db_carros_projeto_integrador');

if (!$conexao) {
    die('Erro ao conectar ao banco de dados: ' . mysqli_connect_error());
}

mysqli_set_charset($conexao, 'utf8mb4');
