<?php
$titulo_da_pagina = "Listagem de Discografias";
include "inc-cabecalho.php";
?>
<body>
    <main class="container">
        <?php include "inc-menu.php"; ?>
        <h1>Listagem de Discografias</h1>
        <div class="row">
            <div class="col">
                <a href="discografia-formulario.php">
            </div>
        </div>

        <div class="row">
         <div class="col">
            <table class="table table-success table-striped">   
                <tr>
                <th>ID</th>
                <th>Artista</th>
                <th>Nome do album</th>
                <th>Ano do Lançamento</th>
                <th>Tipo</th>
                <th scope="col">Ações</th>
                </tr>
                <?php
                #abrir conexão
                include "inc-conexao.php";

                #consultar os dados
                $sql = "select * from tb_discografia order by artista , ano";
                $resultado = mysqli_query($conexao, $sql);

                #lista os dados
                while($linha_resultado = mysqli_fetch_assoc($resultado)){
                    echo "<tr>";
                    echo "<td> {$linha_resultado['id']} </td>";
                    echo "<td> {$linha_resultado['artista']} </td>";
                          
                  echo "<td> <a href='discografia-visualizar.php?id={$linha_resultado['id']}'> {$linha_resultado['nome']} </a> </td> ";

                    echo "<td> {$linha_resultado['ano']} </td>";
                    echo "<td> {$linha_resultado['tipo']} </td>";
                    
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