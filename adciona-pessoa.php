<?php 
require_once("class/pessoa.php");
require_once("controler-pessoa.php");
require_once("conecta.php");


$nome = $_POST['nome'];
$email = $_POST['email'];
$dtNascimento = $_POST['dtNascimento'];

$pessoa = new Pessoa($nome, $email, $dtNascimento, 0);

adcionaPessoa($conexao, $pessoa);
die();
?>
