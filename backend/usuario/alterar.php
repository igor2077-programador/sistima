<?PHP
include'../conexao.php';

$nome=$_REQUEST['nome'];
$email=$_REQUEST['email'];
$cpf=$_REQUEST['cpf'];
$senha=$_REQUEST['senha'];
$id=$_REQUEST['id'];

$sql="upata usuario set nome='$nome',email='$email',cpf='$cpf',senha='$senha 
    where id='$id'' ";
mysqli_query($conexao, $sql);

//session_start();
//$_SESSION['mensagem']="Excluido com sucesso!";

header('location:../../principal.php');

?>