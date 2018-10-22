<?php
require_once("class/Dependente.php");
require_once("conecta.php");

function adcionaDependente($conexao, Dependente $dependente, $idPessoa) {

    $query = "insert into dependente (Nome, DataNascimento, Relacao, idPessoa) 
		values ('{$dependente->getNome()}', '{$dependente->getDtNascimento()}', 
			'{$dependente->getRelacao()}', '{$idPessoa}')";
	echo $query;
    return mysqli_query($conexao, $query);
}

function alteraDependente($conexao, Dependente $dependente) {
	
	$query = "update dependente set Nome = '{$dependente->getNome()}', 
			  DataNascimento = '{$dependente->getDtNascimento()}', 
			  Relacao= '{$dependente->getRelacao()}'
			  WHERE idDependente = '{$dependente->getId()}'";
echo $query;
	return mysqli_query($conexao, $query);
}

function buscaDependente($conexao,$id){
	$resultado = mysqli_query($conexao, "select * from dependente where idDependente = {$id}");
	$dependente_buscado = mysqli_fetch_assoc($resultado);

	$idPessoa = $dependente_array['idPessoa'];
	$nome = $dependente_buscado['Nome'];
	$dtNascimento = $dependente_buscado['DataNascimento'];
	$qtdDependentes = $dependente_buscado['QuantidadeDependentes'];
	$relacao = $dependente_buscado['Relacao'];

	$dependente = new Dependente($idPessoa, $nome, $dtNascimento, $relacao);
	$dependente->setId($dependente_array['idDependente']);

	return $dependente;
}

function listaDependentes($conexao,$idPessoa) {

	$dependentes = array();
	$resultado = mysqli_query($conexao, "select * from dependente where idPessoa = {$idPessoa}");

	while($dependente_array = mysqli_fetch_assoc($resultado)) {
		$idPessoa = $dependente_array['idPessoa'];
		$nome = $dependente_array['Nome'];
		$dtNascimento = $dependente_array['DataNascimento'];
		$relacao = $dependente_array['Relacao'];

		$dependente = new Dependente($idPessoa, $nome, $dtNascimento, $relacao);
		$dependente->setId($dependente_array['idDependente']);

		array_push($dependentes, $dependente);
    }
    
	return $dependentes;
}

function removeDependente($conexao, $id) {

	$query = "delete from dependente where idDependente = {$id}";
	
	return mysqli_query($conexao, $query);
}


function removeTodosDependentes($conexao, $idPessoa) {

	$query = "delete from dependente where idPessoa = {$idPessoa}";
	
	return mysqli_query($conexao, $query);
}