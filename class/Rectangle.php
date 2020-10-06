<?php
require_once "class/Form2d.php";
 class Rectangle extends Form2D{
     protected $lenght; 
     private $widht;

     public function __construct($a,$b){
        $this->lenght= $a;
        $this->widht=$b;
     }
    
     public function perimeter(){
         $result= ($this->lenght+$this->widht)*2;
         return $result;
     }
     public function aire(){
         $resultaire= $this->lenght * $this->widht;
         return $resultaire;
     }


 }




?>