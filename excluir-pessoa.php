<?php
require_once("cabecalho.php");
require_once("controler-pessoa.php"); 

$id = $_POST['idPessoa'];
if(removePessoa($conexao, $id)){
    $_SESSION["success"] = "Pessoa removida com sucesso.";
}else{
    $msg = mysqli_error($conexao);
	$_SESSION["danger"] = "Pessoa não removida ".$msg;
}
header("Location: listar-pessoas.php");
die();

?>