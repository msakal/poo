<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 3</title>
</head>
<body>
    <h1>PHP POO - Exemplo 3</h1>
    <hr>
    <h2>Assuntos aboraddos:</h2>
    <ul>
        <li>Acesso direto à propriedades</li>
        <li>Atribuição de dados e leitura</li>
    </ul>

<?php
    // Importando a Classe
    require_once "src/Cliente.php";

    // Criação dos objetos
    $clienteA = new Cliente;
    $clienteB = new Cliente;

    // Atribuindo dados às propriedades do objeto
    $clienteA->nome = "MarcelloSA";
    $clienteA->email = "msa@hotmail.com";
    $clienteA->telefones = ["11-222-3344", "11-91111-4455"];

    $clienteB->nome = "GMSakal";
    $clienteB->email = "gms@hotmail.com";
    $clienteB->telefones = array("11-98888-5555");
    
?>

<!-- <pre> <?=var_dump($clienteA, $clienteB)?> </pre> -->


<h2>Dados dos objetos</h2>
<h3><?= $clienteA->nome ?></h3>
<p>E-Mail: <?= $clienteA->email ?> </p>
<p>telefones: <?=implode(", ",$clienteA->telefones)?></p>

<h3><?= $clienteB->nome ?></h3>
<p>E-Mail: <?= $clienteB->email ?> </p>
<p>telefones: <?=implode(", ",$clienteB->telefones)?></p>


<h2>Chamando método exibirDados</h2>
<?= $clienteA->exibirDados() ?>
<?= $clienteB->exibirDados() ?>


</body>
</html>