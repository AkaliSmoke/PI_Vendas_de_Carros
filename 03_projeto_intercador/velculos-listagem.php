<?php
$titulo_da_pagina = "veiculos-listagem";
include "inc-cabecalho.php";
?>
<body>
    <main class="container">
        <?php include "inc-menu.php"; ?>
        <h1>veiculos-listagem</h1>
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
                include "./03_projeto_intercador/inc-conexao.php";

                #consultar os dados
                $sql = "select * from tb_carros order by Marca, ano";
                $resultado = mysqli_query($conexao, $sql);

                #lista os dados
                while($linha_resultado = mysqli_fetch_assoc($resultado)){
                    echo "<tr>";
                    echo "<td> {$linha_resultado['id']} </td>";
                    echo "<td> {$linha_resultado['Marca']} </td>";

                    echo "<td> <a href='veiculos-visualizar.php?id={$linha_resultado['id']}'> {$linha_resultado['nome']} </a> </td> ";

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

        <?php include "inc-footer.php"; ?>
    </main>
</body>