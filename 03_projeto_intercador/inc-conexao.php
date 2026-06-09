<?php
$conexao = mysqli_connect("localhost","root","", "db_carros_projeto_integrador");
<<<<<<< Updated upstream
if($conexao){
=======
if(!$conexao){
>>>>>>> Stashed changes
    die("<h3>erro</h3>" . mysqli_connect_error());
}
?>