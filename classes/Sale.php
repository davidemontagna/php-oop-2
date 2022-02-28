<?php

class Sala{
    private $nome;
    private $posti;
    

    public function __construct($_nome, $_posti){
        $this->nome = $_nome;
        $this->posti = $_posti;
    }

    public function getName(){
        return $this->nome;
    }

    public function getPosti(){
        return $this->posti;
    }
}