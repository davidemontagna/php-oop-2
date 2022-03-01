<?php

class Film{
    protected $titolo;
    private $regista;
    private $durata;
    private $lingua;   
    private $cast = [];

    public function __construct($_titolo, $_regista, $_durata, $_lingua, $_cast){
        $this->titolo=$_titolo;
        $this->regista=$_regista;
        $this->durata=$_durata;       
        $this->lingua=$_lingua; 
        $this->cast=$_cast;
    }

    public function getDurata(){
        return $this->durata;
    }
    
   

   
}