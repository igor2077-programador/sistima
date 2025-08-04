<?php 

$endereco="localhost";
$nome="banco-rics";
$usuario="root";
$senha="";

$conexao=mysqli_connect($endereco, $usuario, $senha, $nome);

if(!$conexao){
    die("erro na conexao com o banco!".mysqli_connect_error());
}
?>
