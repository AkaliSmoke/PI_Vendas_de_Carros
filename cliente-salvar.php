<?php
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$senha = $_POST['senha'];
$foto = $_POST['foto'];

 
$conexao = mysqli_connect("localhost", "root", "", "db_spotify");
if(!$conexao){
    echo "erro";
    die("<h3>Erro</h3> " . mysqli_connect_error());
}
 
 
$sql = "insert into tb_cliente(nome, cpf, email, telefone, senha, foto) values ('$nome', '$cpf', '$email', '$telefone', '$senha','$foto')";
 
$resultado = mysqli_query($conexao, $sql);
 
if($resultado){
    echo "cadastrado com sucesso";
}else{
    echo "deu algum problema";
}
 
mysqli_close($conexao);
header('location:cliente-listagem.php');

?>