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
}