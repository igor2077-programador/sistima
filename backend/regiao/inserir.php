<?php 
include '../conexao.php';

$id=$_REQUEST['id'];
$nome=$_REQUEST['nome'];

$sql="insert into regiao(nome)
      values ('$nome')";

session_start();
$_SESSION['mensagem']="Cadastrado com Successo!";

$resultado = mysqli_query($conexao, $sql);
header('location:../../regiao.php');
?>