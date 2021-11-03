<?php

class User{
    private $nome;
    private $cognome;
    private $dataDiNascita;
    private $sesso;

    function __construct($_nome,$_cognome,$_dataDiNascita)
    {
        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->dataDiNascita = $_dataDiNascita;
    }

    public function getNome(){
        return $this->nome;
    }
    public function getCognome(){
        return $this->cognome;
    }
    public function getdataDiNascita(){
        return $this->dataDiNascita;
    }
    public function getSesso(){
        return $this->sesso;
    }

}