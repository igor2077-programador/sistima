<?PHP
include'../conexao.php';


$nome=$_REQUEST['nome'];
$id=$_REQUEST['id'];
$cep=$_REQUEST['cep'];
$estado=$_REQUEST['estado'];
$regiao=$_REQUEST['id_regiao_fk'];

$sql="UPDATE cidade SET nome='$nome' ,id='$id' ,cep='$cep' ,estado='$estado', id_regiao_fk='$regiao' WHERE id='$id' ";
mysqli_query($conexao, $sql);

session_start();
$_SESSION['mensagem']="$nome ALTERADO COM SUSSESO";

header('location:../../cidades.php');

?>