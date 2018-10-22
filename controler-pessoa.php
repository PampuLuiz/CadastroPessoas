<?php

require_once("class/pessoa.php");
require_once("conecta.php");
require_once("controler-dependente.php");

function adcionaPessoa($conexao, Pessoa $pessoa) {

    $query = "insert into Pessoa (Nome, Email, DataNascimento, QuantidadeDependentes) 
        values ('{$pessoa->getNome()}', '{$pessoa->getEmail()}', 
            '{$pessoa->getDtNascimento()}', '0')";

    return mysqli_query($conexao, $query);
}

function alteraPessoa($conexao, pessoa $pessoa) {
	
	$query = "update Pessoa set Nome = '{$pessoa->getNome()}', 
		Email = '{$pessoa->getEmail()}', DataNascimento = '{$pessoa->getDtNascimento()}', 
			QuantidadeDependentes= '{$pessoa->getQtdDependentes()}'
			WHERE idPessoa = '{$pessoa->getId()}'";

	return mysqli_query($conexao, $query);
}

function atualizaQtdDependentes($conexao, pessoa $pessoa, $qtd) {
	
	$query = "update Pessoa set QuantidadeDependentes= '{$qtd}'
			WHERE idPessoa = '{$pessoa->getId()}'";

	return mysqli_query($conexao, $query);
}

function buscaPessoa($conexao,$id){
	
	$resultado = mysqli_query($conexao, "select * from Pessoa where idpessoa = {$id}");
	$pessoa_buscada = mysqli_fetch_assoc($resultado);

	$nome = $pessoa_buscada['Nome'];
	$email = $pessoa_buscada['Email'];
	$dtNascimento = $pessoa_buscada['DataNascimento'];
	$qtdDependentes = $pessoa_buscada['QuantidadeDependentes'];

	$pessoa = new Pessoa($nome, $email, $dtNascimento, $qtdDependentes);
	$pessoa->setId($pessoa_buscada['idPessoa']);

	return $pessoa;

}

function listaPessoas($conexao) {

	$pessoas = array();
	$resultado = mysqli_query($conexao, "select * from pessoa");

	while($pessoa_array = mysqli_fetch_assoc($resultado)) {
		$nome = $pessoa_array['Nome'];
		$email = $pessoa_array['Email'];
		$dtNascimento = $pessoa_array['DataNascimento'];
		$qtdDependentes = $pessoa_array['QuantidadeDependentes'];

		$pessoa = new Pessoa($nome, $email, $dtNascimento, $qtdDependentes);
		$pessoa->setId($pessoa_array['idPessoa']);

		array_push($pessoas, $pessoa);
    }
    
	return $pessoas;
}


function removePessoa($conexao, $id) {
	
	if(removeTodosDependentes($conexao,$id)){
		$query = "delete from pessoa where idPessoa = {$id}";
	}
	return mysqli_query($conexao, $query);
}