<?php 
include "../conexao.php";
$regiao = $_POST['regiao_id'];
$cidades = mysqli_query($conexao, "SELECT * from cidade where id_regiao_fk='$regiao' order by nome ");
echo'<option> selecione </option> ';
while ($cid=mysqli_fetch_assoc($cidades)){;
    echo"<option value='{$cid['id']}'>{$cid['nome']} </option>";
};
?>