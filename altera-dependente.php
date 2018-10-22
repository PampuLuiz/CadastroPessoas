<?php 
require_once("cabecalho.php");
require_once("class/dependente.php");
require_once("controler-dependente.php");

$id = $_POST['id'];
$idPessoa = $_POST['idPessoa'];
$nome = $_POST['nome'];
$dtNascimento = $_POST['dtNascimento'];
$relacao = $_POST['relacao'];

$dependente = new Dependente($idPessoa, $nome, $dtNascimento, $relacao);
$dependente->setId($id);

if(alteraDependente($conexao, $dependente)) {
	$_SESSION["success"] = "Dependente alterado";
} else {
	$msg = mysqli_error($conexao);
	$_SESSION["danger"] = "Dependente não alterado ".$msg;
}
header("Location: cadastro-dependentes.php?idPessoa={$idPessoa}");
?>