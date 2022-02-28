<?php

class Spettacoli{
    private $orario;
    private $data;
   

    public function __construct($_orario, $_data){
        $this->orario = $_orario;
        $this->data = $_data;        
    }

    public function getOrario(){
        return $this->orario;
    }

    public function getData(){
        return $this->data;
    }
    
}