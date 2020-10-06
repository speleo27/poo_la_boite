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
         return ($this->lenght+$this->widht)*2;
     }
     public function aire(){
         return ($this->lenght * $this->widht);
       
     }


 }




?>