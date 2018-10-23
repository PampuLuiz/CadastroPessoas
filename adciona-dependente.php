<?php 
require_once("cabecalho.php");
require_once("class/Dependente.php");
require_once("class/Pessoa.php");
require_once("controler-dependente.php");

$idPessoa = $_POST['idPessoa'];
$nome = $_POST['nome'];
$dtNascimento = $_POST['dtNascimento'];
$relacao = $_POST['relacao'];

$dependente = new Dependente($idPessoa, $nome, $dtNascimento, $relacao);

adcionaDependente($conexao, $dependente ,$idPessoa);
die();
?>