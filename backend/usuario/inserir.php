<?php 
include '../conexao.php';

$nome=$_REQUEST['nome'];
$email=$_REQUEST['email'];
$cpf=$_REQUEST['cpf'];
$senha=$_REQUEST['senha'];

$sql="insert into usuario(nome, email,  cpf, senha)
      values ('$nome', '$email', '$cpf', '$senha')";

$resultado = mysqli_query($conexao, $sql);
header('location:../../principal.php');
?>