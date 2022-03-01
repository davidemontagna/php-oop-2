<?php

class Sale{
    protected $id;
    protected $posti;
    protected $is_4D = false;
    

    public function __construct($_id, $_posti){
        $this->id=$_id;
        $this->posti=$_posti;
    }

    public function getId(){
        return $this->id;
    }

    public function getPosti(){
        return $this->posti;
    }

    public function get4D(){
        return $this->is_4D;
    }
    

    public function setId(){
        $this->id=$_id;
    }

    public function setPosti(){
        $this->posti=$_posti;
    }

   

    public function set4D($_is_4D){
        $this->is_4D = $_is_4D;
    }
}