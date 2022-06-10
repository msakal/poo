<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 3</title>
</head>
<body>
    <h1>PHP POO - Exemplo 4</h1>
    <hr>
    <h2>Assuntos aboraddos:</h2>
    <ul>
        <li>Encapsulamento</li>
        <li>Modificadores de visibilidade</li>
        <li>Métodos de acesso: getters e setters</li>
    </ul>


<?php
    // Importando a Classe
    require_once "src/Cliente.php";

    // Criação dos objetos
    $clienteA = new Cliente;
    $clienteB = new Cliente;

    // Atribuindo dados via setters do objeto
    $clienteA->setNome("MarcelloSA");
    $clienteA->setEmail("msa@hotmail.com");
    $clienteA->setSenha("1234");


    $clienteB->setNome("GMSakal");
    $clienteB->setEmail("gms@hotmail.com");
    $clienteB->setSenha("4321");
   
    
?>

<!-- <pre> <?=var_dump($clienteA, $clienteB)?> </pre> -->


<h2>Dados dos objetos (leitura via getters)</h2>
<h3><?= $clienteA->getNome() ?></h3>
<p><?= $clienteA->getEmail() ?></p>
<p><?= $clienteA->getSenha() ?></p>


<h3><?= $clienteB->getNome() ?></h3>
<p><?= $clienteB->getEmail() ?></p>
<p><?= $clienteB->getSenha() ?></p>





</body>
</html>