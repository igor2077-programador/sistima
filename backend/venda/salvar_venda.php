<?php 
include '../conexao.php';

$regiao_=$_REQUEST['regiao_id'];
$cidades=$_REQUEST['cidade_id'];
$id_ponto_focal_fk=$_REQUEST['ponto_focal_id'];
$area=$_REQUEST['area_id'];
$dtcompra=$_REQUEST['dtcompra'];
$origem=$_REQUEST['origem'];
$obs=$_REQUEST['obs'];

$sql="INSERT INTO venda( data, origem,obs,id_area_fk,id_ponto_focal_fk  )
      VALUES ('$dtcompra','$origem','$obs','$id_ponto_focal_fk','$area' )";

session_start();
$_SESSION['mensagem']="Cadastrado com Successo!";

$resultado = mysqli_query($conexao, $sql);
header('location:../../venda.php');
?>