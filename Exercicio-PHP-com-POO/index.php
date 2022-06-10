<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 3</title>

    <style>
        table, th, td {
        border: 2px solid black;
        border-collapse: collapse;
    }
    table {
        width: 80%;
        margin: auto;
        max-width: 700px;
    }

    th {
        background-color: black;
        color: white;
    }
    td {
        background-color: white;
    }
    th, td {
        width: 33%;
        padding: 0.5rem;
    }

    td:first-child {
        text-transform: uppercase;
    }

    td:nth-child(3) {
        text-align: center;
    }
    </style>
</head>
<body>
    <h1>Exercício de PHP com POO</h1>
    <hr>
    <h2>Assuntos aboraddos:</h2>
    <ul>
        <li>Criar arquivo index.php e classes.</li>
        <li>Criar um Objeto a partir da classe.</li>
        <li>Utilizando - Métodos de acesso: getters e setters</li>
    </ul>


<?php
    // Importando a Classe
    require_once "src/Livro.php";

    // Criação dos objetos
    $livroA = new Livro;
    $livroB = new Livro;
    
    // Atribuindo dados via setters do objeto
    $livroA->setTitulo("Ninguém é de Ninguém");
    $livroA->setAutor("Zíbia Gasparetto");
    $livroA->setPaginas("7845");

    $livroB->setTitulo("Perdidos na Noite");
    $livroB->setAutor("Aloprado");
    $livroB->setPaginas("239");


?>


<!-- <h2>Dados dos objetos (leitura via getters)</h2>
<h3>Título: <?= $livroA->getTitulo() ?></h3>
<p><strong>Autor: </strong><?= $livroA->getAutor() ?></p>
<p><strong>Páginas: </strong> <?= $livroA->getPaginas() ?></p> -->
<hr>

<table>
    <thead>
        <tr>
            <th>Título</th>
            <th>Autor</th>
            <th>Páginas</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?= $livroA->getTitulo() ?></td>
            <td><?= $livroA->getAutor() ?></td>
            <td><?= $livroA->getPaginas() ?></td>
        </tr>
        <tr>
            <td><?= $livroB->getTitulo() ?></td>
            <td><?= $livroB->getAutor() ?></td>
            <td><?= $livroB->getPaginas() ?></td>
        </tr>
    </tbody>

</table>



</body>
</html>