<?php
    require_once "class/Rectangle.php";
 class Carre extends Rectangle{

    public function __construct($a)
    {
        $this->lenght=$a;

    }
    public function perimeter(){
        $result= $this->lenght*4;
        return $result;
    }
    public function aire()
    {
        $resultaire=$this->lenght * $this->lenght;
        return $resultaire;
    }
 }










?>