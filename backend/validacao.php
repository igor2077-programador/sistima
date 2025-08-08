<?php 
   session_start();

   if(!isset($_SESSION['cpf']) or !isset($_SESSION['senha'])){
    session_destroy();
    unset($_session['cpf']);
    unset($_session['senha']);

    header('location:./index.php');
   }
?>