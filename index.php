<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 5</title>
</head>
<body>
    <h1>PHP POO - Exemplo 5</h1>
    <hr>
    <h2>Assuntos aborados:</h2>
    <ul>
        <li>Herança</li>
        <li>Classe Abstrata (Não pode ser instanciada)</li>
        <li>Classe Final (Não permite herança)</li>
        <li>Métodos/Propriedades protegidos (acessiveis apenas pelas subClasses)</li>
    </ul>
    <hr><hr>


<?php
    // Importando a Classe
    // require_once "src/Cliente.php";
    require_once "src/PessoaFisica.php";
    // require_once "src/PessoaJuridica.php";
    require_once "src/MEI.php";  // subClasse

    $clientePF = new PessoaFisica;
    $clientePJ = new PessoaJuridica;
    $clienteMEI = new MEI;

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

    // MEI
    $clienteMEI->setNome('Sakal');
    $clienteMEI->setNomeFantasia('Alemão');
    $clienteMEI->setCnpj('45.678.987/0001-99');
    $clienteMEI->setAreaDeAtuacao('Musica');

    
?>
<p><strong>Pessoa Física</strong></p>
<pre> <?=var_dump($clientePF)?> </pre>
<hr>
<p><strong>Pessoa Jurídica</strong></p>
<pre> <?=var_dump($clientePJ)?> </pre>
<hr>
<p><strong>MEI</strong></p>
<pre> <?=var_dump($clienteMEI)?> </pre>
<hr>


<!-- ERRO ... pois 'Cliente' é abstrato -->
<?php $cliente = new Cliente; ?>
<pre><?=var_dump($cliente)?></pre>


</body>
</html>