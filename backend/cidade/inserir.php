<?php
include '../conexao.php';

$nome = $_REQUEST['nome'];
$cep = $_REQUEST['cep'];
$estado = $_REQUEST['estado'];
$regiao = $_REQUEST['id_regiao_fk'];

$sql2 = "select * from cidade where nome='$nome' ";

$resutado = mysqli_query($conexao, $sql2);

if (mysqli_num_rows($resutado) > 0) {
      session_start();
      $_session['mensagem'] = "cidade ja existemte";
} else {
      $sql = "INSERT INTO cidade(nome,cep,estado,id_regiao_fk) VALUES ('$nome','$cep','$estado','$regiao')";
      $resutado = mysqli_query($conexao, $sql);
}

session_start();
$_SESSION['mensagem'] = "Cadastrado com Successo!";

header('location:../../cidades.php');
?>