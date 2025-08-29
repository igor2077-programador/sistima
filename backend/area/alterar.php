<?PHP
include'../conexao.php';


$nome=$_REQUEST['nome'];
$numero=$_REQUEST['numero'];;
$id=$_REQUEST['id'];

$sql="UPDATE area SET nome='$nome',numero='$numero' WHERE id='$id' ";
mysqli_query($conexao, $sql);

session_start();
$_SESSION['mensagem']="$nome ALTERADO COM SUSSESO";

header('location:../../area.php');

?>