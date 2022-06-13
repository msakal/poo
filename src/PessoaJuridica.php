<?php
require_once "RamoAtividade.php";
require_once "Cliente.php";

// final class
// Indica que a classe NÃO PERMITE herança ex:  
//  'final class PessoaJuridica extends Cliente {}
class PessoaJuridica extends Cliente {
    private string $cnpj;
    private int $anoFundacao;
    private string $nomeFantasia;
    // private RamoAtividade $tipo;

    public function __construct() {
        $this->setSituacao('Verificar');
    }

    
    public function getCnpj(): string
    {
        return $this->cnpj;
    }
    public function setCnpj(string $cnpj): void
    {
        $this->cnpj = $cnpj;  
    }

   
    public function getAnoFundacao(): int
    {
        return $this->anoFundacao;
    }
    public function setAnoFundacao(int $anoFundacao): void
    {
        $this->anoFundacao = $anoFundacao;

    }

   
    public function getNomeFantasia(): string
    {
        return $this->nomeFantasia;
    }
    public function setNomeFantasia(string $nomeFantasia): void
    {
        $this->nomeFantasia = $nomeFantasia;
    }
}