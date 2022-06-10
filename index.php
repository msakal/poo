<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 3</title>
</head>
<body>
    <h1>PHP POO - Exemplo 5</h1>
    <hr>
    <h2>Assuntos aborados:</h2>
    <ul>
        <li>Herança</li>
        <li>Classe Abstrata (Não pode ser instanciada)</li>
    </ul>
    <hr><hr>


<?php
    // Importando a Classe
    // require_once "src/Cliente.php";
    require_once "src/PessoaFisica.php";
    require_once "src/PessoaJuridica.php";

    $clientePF = new PessoaFisica;
    $clientePJ = new PessoaJuridica;

    // Consulta PF
    $clientePF->setNome('Marcello');
    $clientePF->setEmail('msa@hotmail.com');
    $clientePF->setSenha('1234abc');

    $clientePF->setCpf('123.456.789-00');
    $clientePF->setIdade(48);


    // Consulta PJ
    $clientePJ->setNome('MarcelloSA');
    $clientePJ->setEmail('msapj@hotmail.com');
    $clientePJ->setSenha('78945xyz');

    $clientePJ->setCnpj('60.662.996/0001-22');
    $clientePJ->setAnoFundacao(1973);
    $clientePJ->setNomeFantasia('CursoTI');

    
?>
<p><strong>Pessoa Física</strong></p>
<pre> <?=var_dump($clientePF)?> </pre>
<hr>
<p><strong>Pessoa Jurídica</strong></p>
<pre> <?=var_dump($clientePJ)?> </pre>
<hr>


<!-- ERRO ... pois 'Cliente' é abstrato -->
<?php $cliente = new Cliente; ?>
<pre><?=var_dump($cliente)?></pre>


</body>
</html>