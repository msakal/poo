<?php

require_once "Cliente.php";
class PessoaFisica extends Cliente {
    private string $cpf;
    private int $idade;

    // Propriedade estática (não depende de um objeto)
    public static string $cidade;


    // Método estático (não depende de um objeto)
    public static function verificaIdade(int $idade):string {
        return $idade >= 60 ? "prioridade" : "normal";
    }


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