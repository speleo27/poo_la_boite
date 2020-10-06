<?php

    function hr(){echo '<hr/>';}
    require_once "class/Form2d.php";
    require_once "class/Rectangle.php";
    require_once "class/Carre.php";
    require_once "class/Pararectangle.php";
    require_once "class/Cube.php";
    require_once "class/Form3d.php";

    $ra=new Rectangle(12,7);
    echo $ra->perimeter();
    hr();
    echo $ra->aire();
    hr();
    $ca=new Carre(5.6);

    echo $ca->perimeter();
    hr();
    echo $ca->aire();

    hr();
    $para= new Pararectangle(11,6,4);
    echo $para->volume();
    hr();
    $cua=new Cube(8);
    echo $cua->volume();






?>