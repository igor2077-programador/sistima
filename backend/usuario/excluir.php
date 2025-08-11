<?PHP
include'../conexao.php';

$id=$_REQUEST['id'];
$sql="delete from usuario where id='$id' ";
$resutado=mysqli_query($conexao, $sql);

header('location:../../principal.php');

?>