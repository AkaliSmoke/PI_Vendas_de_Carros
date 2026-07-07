<?php
$titulo_da_pagina = "Listagem de veiculos";
include "inc-cabecalho.php";
?>
<body>
    <main class="container">
        <?php include "inc-menu.php"; ?>
        <h1>Listagem de veiculos</h1>
        <div class="row">
            <div class="col">
                <a href="veiculos-cadastrar.php">
            </div>
        </div>

        <div class="row">
         <div class="col">
            <table class="table table-success table-striped">   
                <tr>
                <th>marca</th>
                <th>modelo</th>
                <th>ano</th>
                <th>quilometragem</th>
                <th>combustivel</th>
                <th>foto</th>
                <th>cor</th>
                <th>preco</th>p
                <th scope="col">Ações</th>
                </tr>
                <?php
                #abrir conexão
                include "inc-conexao.php";

                #consultar os dados
                $sql = "select * from tb_carro order by artista , ano";
                $resultado = mysqli_query($conexao, $sql);

                #lista os dados
                while($linha_resultado = mysqli_fetch_assoc($resultado)){
                    echo "<tr>";
                    echo "<td> {$linha_resultado['marca']} </td>";
                    echo "<td> {$linha_resultado['modelo']} </td>";
                          
                  echo "<td> <a href='discografia-visualizar.php?id={$linha_resultado['id']}'> {$linha_resultado['nome']} </a> </td> ";

                    echo "<td> {$linha_resultado['ano']} </td>";
                    echo "<td> {$linha_resultado['quilometragem']} </td>";
                    echo "<td> {$linha_resultado['combustivel']} </td>";
                    echo "<td> {$linha_resultado['foto']} </td>";
                    echo "<td> {$linha_resultado['cor']} </td>";
                    echo "<td> {$linha_resultado['preco']} </td>";
                    
                     echo "<td> <a href='?id={$linha_resultado['id']}' class='d-inline-flex align-items-center gap-1 text-decoration-none'> <i class='bi bi-trash'></i></a> 
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