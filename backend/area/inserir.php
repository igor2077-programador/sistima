<?php 
include '../conexao.php';

$nome=$_REQUEST['nome'];
$numero=$_REQUEST['numero'];

$sql="insert into area(nome, numero )
      values ('$nome', '$numero' )";

session_start();
$_SESSION['mensagem']="Cadastrado com Successo!";

$resultado = mysqli_query($conexao, $sql);
header('location:../../area.php');
?>