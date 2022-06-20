<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio - namespace/compser/autoload</title>

   
</head>
<body>
    <h1>Desafio - namespace</h1>
    <hr>
    <h2>Assuntos aboraddos:</h2>
    <ul>
        <li>Namespace</li>
        <li>Composer</li>
        <li>Autoload</li>
    </ul>


<?php
    // Importando a Classe
    // require_once "src/Programacao.php";
    // require_once "src/Didatico.php";


    /*  Criar na raiz no projeto, o arquivo 'composer.json'
        No prompt (do projeto) executar o comnado 'composer dump-autoload'.
        Dentro da pasta '/vendor/composer' */
    require_once "vendor/autoload.php";


    // use Exercicio as Ex;
    use Exercicio\{
        Tecnico, Web
    };


    // Criação dos objetos
    // $livroTecnico = new Ex\Tecnico;
    $livroTecnico = new Tecnico;
    $livroWeb = new Web;
    // $livroProgramacao = new Exercicio\Programacao;
    // $livroDidatico = new Exercicio\Didatico;
  


    $livroTecnico->setTitulo("Desenv");
    $livroTecnico->setAutor("Fulano");
    $livroTecnico->setPaginas(250);
    $livroTecnico->setFormato(['digital']);
    

?>





<hr>
<br>
<h2>Dados dos objetos (namespace)</h2>
<p><strong>Título: </strong> <?= $livroTecnico->formataTitulo() ?></p>
<p><strong>Autor: </strong><?= $livroTecnico->getAutor() ?></p>
<p><strong>Páginas: </strong> <?= $livroTecnico->getPaginas() ?></p>
<p><strong>Formato: </strong> <?= $livroTecnico->getFormato() ?></p>
<hr>



<!-- Teste Ex3 -->

<!-- OpçãoA -->
<!-- <h3>Resultado:</h3>
<p>Web:
    <p><strong>Título: </strong> ?= $livroWeb->getWeb() ?></p>
</p> -->


<!-- OpçãoB -->



</body>
</html>