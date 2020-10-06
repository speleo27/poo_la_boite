<?php
require_once "class/Form3d.php";
class Cube extends Carre{
    use Form3D;
    private $higth;

    public function __construct($a)
    {
        parent::__construct($a);
        $this->higth=$a;
    }
    public function volume()
    {
       return ($this->aire()* $this->higth);
    }

}




?>