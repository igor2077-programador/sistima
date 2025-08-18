<?php 
include '../conexao.php';

$id=$_REQUEST['id'];
$nome=$_REQUEST['nome'];
$cep=$_REQUEST['cep'];
$estado=$_REQUEST['estado'];
$regiao=$_REQUEST['id_regiao_fk'];

$sql="insert into cidade(nome,cep,estado,id_regiao_fk)
      values ('$nome','$cep','$estado','$regiao')";

session_start();
$_SESSION['mensagem']="Cadastrado com Successo!";

$resultado = mysqli_query($conexao, $sql);
header('location:../../cidades.php');
?>