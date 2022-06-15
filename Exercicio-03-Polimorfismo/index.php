<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3 - Polimorfismo</title>

    <style>
    /* body {
        background-color: rgb(224, 224, 224);
    }
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
        background-color: rgb(245, 245, 245);
    }
    th, td {
        width: 33%;
        padding: 0.5rem;
    }
    td:first-child {
        text-transform: uppercase;
    }
    td:nth-child(3), td:nth-child(7) {
        text-align: center;
    } */
    </style>
</head>
<body>
    <h1>Exercício de PHP com POO</h1>
    <hr>
    <h2>Assuntos aboraddos:</h2>
    <ul>
        <li>Formatação titulo</li> 
    </ul>


<?php
    // Importando a Classe
    require_once "src/Tecnico.php";
    require_once "src/Programacao.php";
    require_once "src/Didatico.php";

    // Criação dos objetos
    $livroTec= new Tecnico;
    $livroA = new Programacao;
    $livroB = new Didatico;
    
    
    // Atribuindo dados via setters do objeto
    

    // Livro
    $livroA->setTitulo("Perdidos na Noite");
    $livroA->setAutor("Aloprado");
    $livroA->setPaginas("239");
    // Tecnico
    $livroA->setFormato(['digital']);
    // Programacao
    $livroA->setArea("web");
     

    // Livro
    // $livroB->setTitulo("Coisas de Maluco para Aprender");
    // $livroB->setAutor("Shing-Ling");
    // $livroB->setPaginas("9632");
    // Tecnico
    // $livroB->setFormato(["fisico"]);
    // Didatico
    //  $livroB->setDisciplina("inglês");
    //  $livroB->setNivel(["basico"]);

?>

<!-- Teste Ex3 -->

<!-- OpçãoA -->
<h3>Resultado:</h3>
<p>Técnico:
    <?=$livroA->formataTitulo($livroA->getTitulo()) ?>
</p>


<!-- OpçãoB -->




<h2>Dados dos objetos (leitura via getters)</h2>
<p><strong>Título: </strong> <?= $livroA->formataTitulo() ?></p>
<p><strong>Autor: </strong><?= $livroA->getAutor() ?></p>
<p><strong>Páginas: </strong> <?= $livroA->getPaginas() ?></p>
<p><strong>Formato: </strong> <?= $livroA->getFormato() ?></p>
<p><strong>Area: </strong> <?= $livroA->getArea() ?></p>
<hr>

<!-- <h3>Título: <?= $livroB->getTitulo() ?></h3>
<p><strong>Autor: </strong><?= $livroB->getAutor() ?></p>
<p><strong>Páginas: </strong> <?= $livroB->getPaginas() ?></p>
<p><strong>Formato: </strong> <?= $livroB->getFormato() ?></p>
<p><strong>Disciplina: </strong> <?= $livroB->getDisciplina() ?></p>
<p><strong>Nível: </strong> <?= $livroB->getNivel() ?></p>
<hr> -->


<!-- OpçãoB -->
<!-- <p>Técnico:
    <?=$livroA->formataTitulo() ?>
</p>

<p>Programação:
    <?=$livroB->formataTitulo($livroB->getTitulo()) ?>
</p> -->


<!-- 
<table>
    <thead>
        <tr>
            <th>Título</th>
            <th>Autor</th>
            <th>Páginas</th>
            <th>Formato</th>
            <th>Especificação</th>
            <th>Descrição</th>
            <th>Nível</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?= $livroA->getTitulo() ?></td>
            <td><?= $livroA->getAutor() ?></td>
            <td><?= $livroA->getPaginas() ?></td>
            <td><?= $livroA->getFormato() ?></td>
            <td>Programação</td>
            <td><?= $livroA->getArea() ?></td>
            <td>#</td>
        </tr>
        <tr>
            <td><?= $livroB->getTitulo() ?></td>
            <td><?= $livroB->getAutor() ?></td>
            <td><?= $livroB->getPaginas() ?></td>
            <td><?= $livroB->getFormato() ?></td>
            <td>Didatico</td>
            <td><?= $livroB->getDisciplina() ?></td>
            <td><?= $livroB->getNivel() ?></td>
        </tr>
    </tbody>

</table> -->



</body>
</html>