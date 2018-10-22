<?php
require_once("cabecalho.php");
require_once("controler-dependente.php"); 

$id = $_POST['idDependente'];
$idPessoa = $_POST['idPessoa'];
if(removeDependente($conexao, $id)){
    $_SESSION["success"] = "Dependente removido com sucesso.";
}else{
    $msg = mysqli_error($conexao);
	$_SESSION["danger"] = "Dependente não removido ".$msg;
}
header("Location: cadastro-dependentes.php?idPessoa={$idPessoa}");
die();

?>
