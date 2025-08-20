<?PHP
include'../conexao.php';


$nome=$_REQUEST['nome'];
$email=$_REQUEST['email'];
$cnpj=$_REQUEST['cnpj'];
$razao_social=$_REQUEST['razao_social'];
$id=$_REQUEST['id'];
$tipo=$_REQUEST['tipo'];
$endereco=$_REQUEST['endereco'];
$telefone=$_REQUEST['telefone'];
$celular=$_REQUEST['celular'];
$id_cidade_fk=$_REQUEST['id_cidade_fk'];

$sql="UPDATE usuario SET nome='$nome',email='$email',cnpj='$cnpj',razao_social='$razao_social', tipo'$tipo', endereco'$endereco' ,telefone '$telefone' ,celular '$celular' ,id_cidade_fk' '$id_cidade_fk'  WHERE id='$id' ";
mysqli_query($conexao, $sql);

session_start();
$_SESSION['mensagem']="$nome ALTERADO COM SUSSESO";

header('location:../../ponto-focal.php');

?>