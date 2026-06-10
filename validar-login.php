<?php
 
$veiculos = $_POST['veiculos'];
$clientes = $_POST['clientes'];
 
if($veiculos == "audi" && $clientes == "leandro"){
    header("Location: tela-administrativo.php");
}else{
    //echo "bloqueado";
    header("Location: form-veiculos.php?mensagem=erro");
}
 
?>