<?php

require_once "Tecnico.php";
class Didatico extends Tecnico {
    private string $disciplina;
    private array $nivel = ['basico', 'medio', 'superior'];

    // disciplina
    public function getDisciplina(): string
    {
        return $this->disciplina;
    }

    public function setDisciplina(string $disciplina):void {
        $this->disciplina = $disciplina;
    }

    // nivel
    public function getNivel(): string {
        return implode(" - ", $this->nivel);
    }

   
    public function setNivel(array $nivel):void {
        $this->nivel = $nivel;
    }


       // Formatação
       public function formataTitulo() {
        echo "<i style='color:blue;'>".mb_strtoupper($this->getTitulo())."</i>";
    }
}