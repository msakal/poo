<?php

require_once "Tecnico.php";
class Programacao extends Tecnico {
    private string $area;
   


    // get
    public function getArea(): string {
        return $this->area;
    }

    // set
    public function setArea(string $area) {
        $this->area = $area;
    }

    // Formatação
    public function formataTitulo() {
        echo "<i style='color:blue;'>".mb_strtoupper($this->getTitulo())."</i>";
    }

    // public function formataTitulo(string $titulo):string {
    //     return "<i style='color:blue;'>" .$titulo. "</i>";
    // }
}