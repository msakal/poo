<?php
class Livro {
    // Propriedades (ou atributos)
    private string $titulo;
    private string $autor;
    private int $paginas = 0;

    // Métodos getters
    public function getTitulo():string {
        return $this->titulo;
    }
    public function getAutor():string {
        return $this->autor;
    }
    public function getPaginas():int {
        return $this->paginas;
    }
    
    // setter
    public function setTitulo(string $titulo) {
        $this->titulo = $titulo;
    }
    public function setAutor(string $autor) {
        $this->autor = $autor;
    }
    public function setPaginas(int $paginas) {
        $this->paginas = $paginas;
    }
}

// USANDO A EXTENSÂO GETTERS E SETTERS
// instalando a extensão getters e setters (versão 8)

// Clicando com o botão da direita em cima da propriedade, já cria os get e set dos atributos.

class Joao {
    private string $nome;

   
    public function getNome(): string
    {
        return $this->nome;
    }

   
    public function setNome(string $nome)
    {
        $this->nome = $nome;

        // return $this;
    }
}