<?php 
require_once("cabecalho.php");
require_once("class/pessoa.php");
require_once("controler-pessoa.php");

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$dtNascimento = $_POST['dtNascimento'];

$pessoa = new Pessoa($nome, $email, $dtNascimento, 0);
$pessoa->setId($id);

if(alteraPessoa($conexao, $pessoa)) {
	$_SESSION["success"] = "Pessoa alterada";
} else {
	$msg = mysqli_error($conexao);
	$_SESSION["danger"] = "Pessoa não alterada ".$msg;
}
header("Location: listar-pessoas.php");
?>