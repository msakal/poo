<?php
// Exemplo-geral.php

class Exemplo {
    // Atributos ou Propriedades
    public string $nome;
    public string $escola;
    public string $cidade;
}

// Criar Objetos/Instâncias
$exemploA = new Exemplo;
$exemploB = new Exemplo;

echo "<pre>";
var_dump($exemploA);
echo "</pre>";

echo "----------------------";
echo "<pre>";
var_dump($exemploB);
echo "</pre>";