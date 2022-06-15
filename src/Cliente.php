<?php

// public:       -> nenhuma restrição (todos acessam todos)
// private:      -> restrição total (só a classe conhece os recursos dela)
// protected:    -> restrição parcial (recursos acessiveis pela própria classe e pelas subclasses que a herdam)


// Criando como classe 'abstract', a classe só pode ser chamada pelas classes dependentes
// --> NÃO PERMITE SER CHAMADA DE FORMA INDIVIDUAL (DIRETA), não pode ser INSTANCIADAS.
abstract class Cliente {
    // Propriedades (ou atributos)
    private string $nome;
    private string $email;
    private string $senha;
    private string $situacao = 'a definir';

    // MÉTODOS
    // getters
    public function getNome():string {
        return $this->nome;
    }
    public function getEmail():string {
        return $this->email;
    }
    public function getSenha():string {
        return $this->senha;
    }
    protected function getSituacao(): string {
        return $this->situacao;
    }
    
    // setter
    public function setNome(string $nome) {
        $this->nome = "Cliente: ".$nome;
    }
    public function setEmail(string $email) {
        $this->email = $email;
    }
    public function setSenha(string $senha) {
        $this->senha = password_hash($senha, PASSWORD_DEFAULT);
    }

    protected function setSituacao(string $situacao) {
        $this->situação = $situacao;
    }
}