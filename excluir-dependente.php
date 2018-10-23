<?php
require_once("cabecalho.php");
require_once("controler-dependente.php"); 

$id = $_POST['idDependente'];
$idPessoa = $_POST['idPessoa'];

removeDependente($conexao, $id);
die();

?>
