<?php 
include '../conexao.php';

$regiao_=$_REQUEST['regiao'];
$cidade=$_REQUEST['cidcade'];
$ponto_focal=$_REQUEST['ponto_focal'];
$area=$_REQUEST[''];
$dtcompra=$_REQUEST[''];
$origem=$_REQUEST[''];
$obs=$_REQUEST[''];

$sql="insert into area(regiao, cidade )
      values ('$regiao', '$cidade' )";

session_start();
$_SESSION['mensagem']="Cadastrado com Successo!";

$resultado = mysqli_query($conexao, $sql);
header('location:../../area.php');
?>