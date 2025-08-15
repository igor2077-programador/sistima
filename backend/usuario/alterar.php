<?PHP
include'../conexao.php';


$nome=$_REQUEST['nome'];
$email=$_REQUEST['email'];
$cpf=$_REQUEST['cpf'];
$senha=$_REQUEST['senha'];
$id=$_REQUEST['id'];

$sql="UPDATE usuario SET nome='$nome',email='$email',cpf='$cpf',senha='$senha' WHERE id='$id' ";
mysqli_query($conexao, $sql);

session_start();
$_SESSION['mensagem']="$nome ALTERADO COM SUSSESO";

header('location:../../principal.php');

?>