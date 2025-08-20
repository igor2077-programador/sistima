<?PHP
include '../conexao.php';

$id=$_REQUEST['id'];
$sql="delete from ponto-focal where id='$id' ";
$resutado=mysqli_query($conexao, $sql);

session_start();
$_SESSION['mensagem']="excluido com successo!";

header('location:../../ponto-focal.php');

?>