<?php
class Cliente {
    // Propriedades (ou atributos)
    public string $nome;
    public string $email;
    public string $senha;
    public array $telefones;


    // dentro da classe, sempre usar o "$this" para acesso aos atributos.
    public function exibirDados() {
        echo "<h3> $this->nome </h3>";
        echo "<ul>";
            echo "<li> $this->email </li>";
            echo "<li>" .implode(", ",$this->telefones)."</li>";
        echo "</ul>";
    }


    // // Método construtor (exemplo2)
    // public function __construct(string $nome, string $email )
    // {
    //     // $this é uma variável especial, sempre apontando para a referência da classe atualmente manupulada.
    //     $this->nome = $nome;
    //     $this->email = $email;
    // }
}