<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 1</title>
</head>
<body>
    <h1>PHP POO - Exemplo 2</h1>
    <hr>
    <h2>Assuntos aboraddos:</h2>
    <ul>
        <li>Criação dos objetos</li>
        <li>Uso do método construtor</li>
        <li>Uso do <code>$this</code> para acessar as propriedades</li>
    </ul>

<?php
    // Importando a Classe
    require_once "src/Cliente.php";

    // Criação dos objetos
    $clienteA = new Cliente('Marcello', 'msakal@hotmai.com');
    $clienteB = new Cliente('GMS', 'gms@gmail.com');

    echo "<pre>";
    var_dump($clienteA);
    echo "</pre>";

    echo "----------------------";
    echo "<pre>";
    var_dump($clienteB);
    echo "</pre>";
?>

</body>
</html>