<?php

require_once "Livro.php";
class Tecnico extends Livro {
    private array $formato = ['digital', 'fisico'];

    // get
    public function getFormato(): string {
        return implode($this->formato);
    }
    // set
    public function setFormato(array $formato) {
        $this->formato = $formato;
    }
}