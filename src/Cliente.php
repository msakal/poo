<?php
class Cliente {
    // Propriedades (ou atributos)
    public string $nome;
    public string $email;
    public string $senha;
    public string $telefone;

    // Método construtor
    public function __construct(string $nome, string $email )
    {
        // $this é uma variável especial, sempre apontando para a referência da classe atualmente manupulada.
        $this->nome = $nome;
        $this->email = $email;
    }
}