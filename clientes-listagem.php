<?php
$titulo_da_pagina = "Listagem de Clientes";
include "inc-cabecalho.php";
?>
<body>
    <main class="container">
        <?php include "inc-menu.php"; ?>
        
        <h1>Listagem de Clientes</h1>
        
        <div class="row">
            <div class="col">
                <a href="cliente-cadastrar.php" class="btn btn-primary mb-3">Novo Cliente</a>
            </div>
        </div>

        <div class="row">
         <div class="col">
            <table class="table table-success table-striped">   
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th scope="col">Ações</th>
                </tr>
                <?php
                #abrir conexão
                include "inc-conexao.php";

                #consultar os dados
                $sql = "select * from tb_cliente order by nome";
                $resultado = mysqli_query($conexao, $sql);

                #lista os dados
                while($linha_resultado = mysqli_fetch_assoc($resultado)){
                    echo "<tr>";
                    echo "<td> {$linha_resultado['id_cliente']} </td>";
                    
                    // O nome do cliente funciona como link para visualizar as informações completas
                    echo "<td> <a href='cliente-visualizar.php?id={$linha_resultado['id_cliente']}'> {$linha_resultado['nome']} </a> </td> ";

                    echo "<td> {$linha_resultado['cpf']} </td>";
                    echo "<td> {$linha_resultado['email']} </td>";
                    echo "<td> {$linha_resultado['telefone']} </td>";
                    
                    // Ações com o ícone de exclusão do Bootstrap e link para edição
                    echo "<td> 
                            <a href='cliente-excluir.php?id={$linha_resultado['id_cliente']}' class='d-inline-flex align-items-center gap-1 text-decoration-none text-danger'>
                                <i class='bi bi-trash'></i>
                            </a> 
                            <a href='cliente-editar.php?id={$linha_resultado['id_cliente']}' class='ms-2'>editar</a>
                          </td>";
                    echo "</tr>";
                }
                #fechar conexão
                mysqli_close($conexao);
             ?>
            </table>
         </div>   
        </div>

    </main>
