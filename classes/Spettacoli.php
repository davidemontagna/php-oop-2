<?php

require_once __DIR__.'/Sale.php';
require_once __DIR__.'/Film.php';

class Spettacoli{
    private $sala;
    private $film;
    private $orario;
    private $data;
   

    public function __construct($_sala, $_film ,$_orario, $_data){
        $this->sala=$_sala;
        $this->film=$_film;
        $this->orario=$_orario;
        $this->data=$_data;        
    }

    public function getInfoSpettacolo(){
        return $this->effetti_speciali;
    }

    public function setEffetti_speciali(){
        $this->effetti_speciali=$_effetti_speciali;
    }
}