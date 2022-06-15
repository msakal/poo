<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 5</title>
</head>
<body>
    <h1>PHP POO - Exemplo 7</h1>
    <hr>
    <h2>Assuntos aborados:</h2>
    <ul>
        <li>Propriedades e Métodos Estáticos</li>
    </ul>
    <hr><hr>


<?php
    // Importando a Classe
    // require_once "src/Cliente.php";  // Classe acesada pelas subClasses (PF / PJ)
    require_once "src/PessoaFisica.php";
    // require_once "src/PessoaJuridica.php";
    // require_once "src/MEI.php";  // subClasse

    $clientePF = new PessoaFisica;
    // Consulta PF
    $clientePF->setNome('Marcello');
    $clientePF->setIdade(48);

    
    
    // Acessando uma propriedade estática
    PessoaFisica::$cidade = "São Paulo";

    // Acessando e lendo o valor de uma propriedade estática
    echo PessoaFisica::$cidade;
    
?>



<p><strong>Pessoa Física</strong></p>
<p><?=$clientePF->getNome()?></p>
<p><?=$clientePF->getIdade()?></p>
<p>Tipo de Atendimento:
    <?=PessoaFisica::verificaIdade( $clientePF->getIdade() ) ?>
</p>
<hr>





</body>
</html>