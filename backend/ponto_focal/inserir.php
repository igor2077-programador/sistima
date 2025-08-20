<?php 
include '../conexao.php';

$nome=$_REQUEST['nome'];
$email=$_REQUEST['email'];
$cnpj=$_REQUEST['cnpj'];
$razao_social=$_REQUEST['razao_social'];
$id=$_REQUEST['id'];
$tipo=$_REQUEST['tipo'];
$endereco=$_REQUEST['endereco'];
$telefone=$_REQUEST['telefone'];
$celular=$_REQUEST['celular'];
$id_cidade_fk=$_REQUEST['id_cidade_fk'];

$sql="insert into ponto-focal(nome, email,  cpf, senha)
      values ('$nome', '$email', '$cnpj', '$tipo', '$endereco', '$telefone', '$celular', '$id_cidade_fk', '$razao_social')";

session_start();
$_SESSION['mensagem']="Cadastrado com Successo!";

$resultado = mysqli_query($conexao, $sql);
header('location:../../ponto-focal.php');
?>