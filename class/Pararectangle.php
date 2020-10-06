<?php
require_once "class/Form3d.php";
class Pararectangle extends Rectangle {
    use Form3D ;
    private $higth;

    public function __construct($a,$b,$c)
    {
        parent::__construct($a,$b);
        $this->higth=$c;
    }
    public function volume()
    {
    return($this->aire()* $this->higth);
       
    }
}



?>