<<?php
$titulo_da_pagina = "Listagem de Vendedores";
include "inc-cabecalho.php";
?>

<body>
    <main class="container">
        <?php include "inc-menu.php"; ?>

        <h1>Listagem de Vendedores</h1>

        <div class="row">
            <div class="col">
                <a href="vendedor-cadastrar.php" class="btn btn-success">
                    Novo Vendedor
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <table class="table table-success table-striped">
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th>Email</th>
                        <th>Loja</th>
                        <th scope="col">Ações</th>
                    </tr>

                    <?php
                    # abrir conexão
                    include "inc-conexao.php";

                    # consultar os dados
                    $sql = "SELECT * FROM tb_vendedor ORDER BY nome";
                    $resultado = mysqli_query($conexao, $sql);

                    # lista os dados
                    while($linha_resultado = mysqli_fetch_assoc($resultado)){
                        echo "<tr>";
                        echo "<td>{$linha_resultado['id_vendedor']}</td>";
                        echo "<td><a href='vendedor-visualizar.php?id_vendedor={$linha_resultado['id_vendedor']}'>{$linha_resultado['nome']}</a></td>";
                        echo "<td>{$linha_resultado['telefone']}</td>";
                        echo "<td>{$linha_resultado['email']}</td>";
                        echo "<td>{$linha_resultado['nome_da_loja']}</td>";

                        echo "<td>
                                <a href='vendedor-excluir.php?id_vendedor={$linha_resultado['id_vendedor']}' class='d-inline-flex align-items-center gap-1 text-decoration-none'>
                                    <i class='bi bi-trash'></i>
                                </a>
                                <a href='vendedor-editar.php?id_vendedor={$linha_resultado['id_vendedor']}'>editar</a>
                              </td>";

                        echo "</tr>";
                    }

                    # fechar conexão
                    mysqli_close($conexao);
                    ?>
                </table>
            </div>
        </div>

    </main>


