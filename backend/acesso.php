<?php 
    include 'conexao.php';
    $cpf = $_REQUEST['cpf'];
    $senha = $_REQUEST['senha'];
    $sql = " SELECT * FROM usuario WHERE cpf='$cpf' AND senha='$senha' ";
    $resultado = mysqli_query($conexao, $sql);
    $colunas = mysqli_fetch_assoc($resultado);
    echo $colunas ['nome'];


    if(mysqli_num_rows($resultado) > 0){
        session_start();
        $_SESSION ['usuario'] = $coluna['nome'];
        $_SESSION ['cpf'] = $coluna['cpf'];
        $_SESSION ['senha'] = $coluna['senha'];
        
        header('location:../principal.php');
    }else{
        header('location:../index.php?erro=1');
    }
?>