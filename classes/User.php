<?php

class User{
    protected $nome;
    protected $cognome;
    protected $dataDiNascita;
    protected $cassa = 0;

    public function __construct($_nome,$_cognome,$_dataDiNascita,$_cassa)
    {
        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->dataDiNascita = $_dataDiNascita;
        $this->cassa = $_cassa;
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
    public function getCassa(){
        return $this->cassa;
    }
    public function setCassa($cassa){
        $this->cassa = $cassa;
    }

}