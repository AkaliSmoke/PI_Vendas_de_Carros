<?php
$conexao = mysqli_connect("localhost","root","", "db_carros");
if(!$conexao){
    die("<h3>erro</h3>" . mysqli_connect_error());
}
?>