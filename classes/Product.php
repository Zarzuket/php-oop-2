<?php 

class Product{
    private $nome;
    private $prezzo;
    private $tipologia;
    private $quantita;


    function __construct($_nome,$_prezzo,$_tipologia,$_quantita)
    {
        $this->nome = $_nome;
        $this->prezzo = $_prezzo;
        $this->tipologia = $_tipologia;
        $this->quantita = $_quantita;
    }
    function getNome(){
        return $this->nome;
    }
    function getPrezzo(){
        return $this->prezzo;
    }
    function getTipologia(){
        return $this->tipologia;
    }
    function getQuantita(){
        return $this->quantita;
    }

}