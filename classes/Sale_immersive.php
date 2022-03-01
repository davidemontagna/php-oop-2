<?php

require_once __DIR__.'/Sale.php';

class Sale_immersive extends Sale{

    private $effetti_speciali;
    
    public function __construct($_id, $_posti, $_effetti_speciali){ 
        parent::__construct($_id, $_posti);        
        $this->effetti_speciali=$_effetti_speciali;    
    }

    public function getEffetti_speciali(){    
        
        return "{$this->effetti_speciali[0]}; {$this->effetti_speciali[1]}; {$this->effetti_speciali[2]}";       
       
    }

    public function setEffetti_speciali(){
        $this->effetti_speciali=$_effetti_speciali;
    }
}