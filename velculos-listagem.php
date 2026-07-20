<?php
$titulo_da_pagina = "Listagem de Veículos";
include "inc-cabecalho.php";
?>

<body>

<main class="container">

    <?php include "inc-menu.php"; ?>

    <h1>Listagem de Veículos</h1>
 <div class="row">
            <div class="col">
                <a href="veiculos-cadastrar.php" class="btn btn-info">
                    Novo veiculos
                </a>
            </div>
        </div>
>

    <div class="row">
        <div class="col">

            <table class="table table-success table-striped">

                <tr>
                    <th>ID</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Ano</th>
                    <th>Quilometragem</th>
                    <th>Combustível</th>
                    <th>Foto</th>
                    <th>Cor</th>
                    <th>Preço</th>
                    <th scope="col">Ações</th>
                </tr>

                <?php

                include "inc-conexao.php";

                $sql = "select * from tb_carro order by marca, ano";
                $resultado = mysqli_query($conexao, $sql);

                while($linha_resultado = mysqli_fetch_assoc($resultado)){

                    echo "<tr>";

                    echo "<td>{$linha_resultado['id_carro']}</td>";

                    echo "<td>{$linha_resultado['marca']}</td>";

                    echo "<td>
                            <a href='veiculos-visualizar.php?id_carro={$linha_resultado['id_carro']}'>
                                {$linha_resultado['modelo']}
                            </a>
                          </td>";

                    echo "<td>{$linha_resultado['ano']}</td>";

                    echo "<td>{$linha_resultado['quilometragem']}</td>";

                    echo "<td>{$linha_resultado['combustivel']}</td>";

                    echo "<td>
                            <img src='{$linha_resultado['foto']}' width='100'>
                          </td>";

                    echo "<td>{$linha_resultado['cor']}</td>";

                    echo "<td>R$ {$linha_resultado['preco']}</td>";

                    echo "<td>
                            <a href='veiculos-excluir.php?id_carro={$linha_resultado['id_carro']}' class='d-inline-flex align-items-center gap-1 text-decoration-none'>
                                <i class='bi bi-trash'></i>
                            </a>

                            <a href='veiculos-editar.php?id_carro={$linha_resultado['id_carro']}'>
                                editar
                            </a>
                          </td>";

                    echo "</tr>";
                }

                mysqli_close($conexao);

                ?>

            </table>

        </div>
    </div>

</main>

