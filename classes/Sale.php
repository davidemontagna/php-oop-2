<?php

class Sale{
    protected $nome;
    protected $posti;
    

    public function __construct($_nome, $_posti){
        $this->nome=$_nome;
        $this->posti=$_posti;
    }

    
}