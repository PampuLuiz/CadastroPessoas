<?php
class Dependente{
    private $idDependente;
    private $idPessoa;
    private $nome;
    private $dtNascimento;
    private $relacao;
    
    function __construct($idPessoa, $nome, $dtNascimento, $relacao) {
        $this->idPessoa = $idPessoa;
        $this->nome = $nome;
        $this->dtNascimento = $dtNascimento;
        $this->relacao = $relacao;
    }
    
    public function getId() {
        return $this->idDependente;
    }
    
    public function setId($idDependente) {
        $this->idDependente = $idDependente;
    }
    
    public function getNome() {
        return $this->nome;
    }

    public function getIdPessoa() {
        return $this->idPessoa;
    }
    
    public function getDtNascimento() {
        return $this->dtNascimento;
    }
    
    public function getRelacao() {
        return $this->relacao;
    }
}

?>