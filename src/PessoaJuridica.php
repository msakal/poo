<?php
require_once "RamoAtividade.php";
require_once "Cliente.php";

// final class
// Indica que a classe NÃO PERMITE herança ex:  
//  'final class PessoaJuridica extends Cliente {}
class PessoaJuridica extends Cliente {
    private string $cnpj;
    private int $anoFundacao;
    // private string $nomeFantasia;
    private string $nome;

    // private RamoAtividade $tipo;

    public function __construct() {
        $this->setSituacao('Verificar');
    }


    public function exibirDados() {
        echo "<h3>".$this->nome."</h3>";
        echo "<p>CNPJ: ".$this->cnpj."</p>";
        echo "<p>Ano fundação: ".$this->anoFundacao."</p>";
        echo "<p>E-mail: ".$this->getEmail()."</p>";
        echo "<p>Situação: ".$this->getSituacao()."</p>";
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

   
    // public function getNomeFantasia(): string
    // {
    //     return $this->nomeFantasia;
    // }
    // public function setNomeFantasia(string $nomeFantasia): void
    // {
    //     $this->nomeFantasia = $nomeFantasia;
    // }

  
    public function getNome(): string {
        return $this->nome;
    }
   
    public function setNome(string $nome) {
        $this->nome = "Empresa: ".$nome;
    }
}