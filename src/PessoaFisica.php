<?php

require_once "Cliente.php";
class PessoaFisica extends Cliente {
    private string $cpf;
    private int $idade;

    // construct
    public function __construct() {
        $this->setSituacao('Normal');
    }

    
    public function exibirDados() {
        echo "<h3>".$this->getNome()."</h3>";
        echo "<p>Idade: ".$this->idade."</p>";
        echo "<p>Situação: ".$this->getSituacao()."</p>";
    }

    // cpf
    public function getCpf(): string {
        return $this->cpf;
    }

    public function setCpf(string $cpf):void {
        $this->cpf = $cpf;
    }

    // idade
    public function getIdade(): int {
        return $this->idade;
    }

    
    public function setIdade(int $idade):void {
        $this->idade = $idade;
    }
}