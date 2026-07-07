<?php
$titulo_da_pagina = "cliente listagem";
include "inc-cabecalho.php";
include "inc-conexao.php"
?>
<body>
    <main class="container">
        <?php include "inc-menu.php"; ?>
        <h1>cliente listagem</h1>
        <div class="row">
            <div class="col">
                <a href="cliente-formulario.php">
            </div>
        </div>

        <div class="row">
         <div class="col">
            <table class="table table-success table-striped">   
                <tr>
                <th>ID</th>
                <th>nome</th>
                <th>telefone</th>
                <th>email</th
                <th scope="col">Ações</th>
                </tr>
                <?php
                #abrir conexão
                include "inc-conexao.php";

                #consultar os dados
                $sql = "select * from tb_cliente order by nome , cpf, email, telefone, senha, foto";
                $resultado = mysqli_query($conexao, $sql);

                #lista os dados
                while($linha_resultado = mysqli_fetch_assoc($resultado)){
                    echo "<tr>";
                    echo "<td> {$linha_resultado['ID_cliente']} </td>";
                          
                  echo "<td> <a href='discografia-visualizar.php?id={$linha_resultado['id']}'> {$linha_resultado['nome']} </a> </td> ";
                    echo "<td> {$linha_resultado['telefone']} </td>";
                    echo "<td> {$linha_resultado['email']} </td>";
                    
                     echo "<td> <a href='discografia-excluir.php?id={$linha_resultado['id']}' class='d-inline-flex align-items-center gap-1 text-decoration-none'> <i class='bi bi-trash'></i></a> 
                     <a href ='discografia-editar.php?id={$linha_resultado['id']}'>editar</a>
                     </td>";
                }
                #fechar conexão
                mysqli_close($conexao)

             ?>
            </table>
         </div>   
        </div>

    </main>
<?php include "inc-rodape.php";