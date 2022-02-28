<?php

require_once __DIR__.'/Sale.php';

class Sale_immersive extends Sale{

    private $effetti_speciali;
    
    public function __construct($_nome, $_posti, $_effetti_speciali){ 
        $this->nome=$_nome;  
        $this->posti=$_posti;        
        $this->effetti_speciali=$_effetti_speciali;   
        
    }



    
}