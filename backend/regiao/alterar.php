<?PHP
include'../conexao.php';


$nome=$_REQUEST['nome'];
$id=$_REQUEST['id'];

$sql="UPDATE usuario SET nome='$nome' WHERE id='$id' ";
mysqli_query($conexao, $sql);

session_start();
$_SESSION['mensagem']="$nome ALTERADO COM SUSSESO";

header('location:../../regioa.php');

?>