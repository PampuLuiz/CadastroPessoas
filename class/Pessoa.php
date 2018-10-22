<?php
class Pessoa{
    private $idPessoa;
    private $nome;
    private $email;
    private $dtNascimento;
    private $qtdDependentes;
    
    function __construct($nome, $email, $dtNascimento, $qtdDependentes) {
        $this->nome = $nome;
        $this->email = $email;
        $this->dtNascimento = $dtNascimento;
        $this->qtdDependentes = $qtdDependentes;
        
    }

    public function getId() {
        return $this->idPessoa;
    }

    public function setId($idPessoa) {
        $this->idPessoa = $idPessoa;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getDtNascimento() {
        return $this->dtNascimento;
    }

    public function getQtdDependentes() {
        return $this->qtdDependentes;
    }

    public function setQtdDependentes($qtdDependentes) {
        $this->qtdDependentes = $qtdDependentes;
    }
}
?>