<?php

class Film{
    private $titolo;
    private $regista;
    private $durata;
    private $lingua;   
    private $cast = [];

    public function __construct($_titolo, $_regista, $_durata, $_lingua, $_cast){
        $this->titolo = $_titolo;
        $this->regista = $_regista;
        $this->durata = $_durata;       
        $this->lingua = $_lingua; 
        $this->cast = $_cast;
    }

    public function getInfoFilm(){
        return "{$this->titolo} {$this->regista} {$this->durata} {$this->lingua} {$this->cast}";
    }
   

   
}