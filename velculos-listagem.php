<?php
$titulo_da_pagina = "velculos-listagem";
include "inc-cabecalho.php";
?>
<body>
    <main class="container">
        <?php include "inc-menu.php"; ?>
        <h1>velculos-listagem</h1>
        <div class="row">
            <div class="col">
                <a href="velculos-cadastrar.php">
            </div>
        </div>

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
                    echo "<td> {$linha_resultado['Marca']} </td>";

                    echo "<td> <a href='discografia-visualizar.php?id={$linha_resultado['id']}'> {$linha_resultado['nome']} </a> </td> ";

                    echo "<td> {$linha_resultado['modelo']} </td>";
                    echo "<td> {$linha_resultado['ano']} </td>";
                    echo "<td> {$linha_resultado['quilometragem']} </td>";
                    echo "<td> {$linha_resultado['Combustível']} </td>";
                    echo "<td> {$linha_resultado['Foto']} </td>";
                    echo "<td> {$linha_resultado['Cor']} </td>";
                    echo "<td> {$linha_resultado['preco']} </td>";
                    echo "</tr>";
                }
                #fechar conexão
                mysqli_close($conexao)

             ?>
            </table>
         </div>   
        </div>

    </main>
<?php include "inc-rodape.php"; ?>