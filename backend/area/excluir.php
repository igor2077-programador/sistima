<?PHP
include '../conexao.php';

$id=$_REQUEST['id'];
$sql="delete from area where id='$id' ";
$resutado=mysqli_query($conexao, $sql);

session_start();
$_SESSION['mensagem']="excluido com successo!";

header('location:../../area.php');

?>