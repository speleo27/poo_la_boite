<?php

    function hr(){echo '<hr/>';}
    require_once "class/Form2d.php";
    require_once "class/Rectangle.php";
    require_once "class/Carre.php";

    $ra=new Rectangle(12,7);
    echo $ra->perimeter();
    hr();
    echo $ra->aire();
    hr();
    $ca=new Carre(5.6);
    echo $ca->perimeter();
    hr();
    echo $ca->aire();






?>