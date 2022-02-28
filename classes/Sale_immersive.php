<?php

class Sale_immersive extends Sale{

    private $effetti_speciali = [];
    
    public function __construct($_effetti_speciali){        
        $this->effetti_speciali = $_effetti_speciali;       
    }

    public function getEffetti(){
        return $this->effetti_speciali;
    }

    
}