<?php
use e3\Rectangulo;

include "Rectangulo.php";

$rectangulo1 = new Rectangulo(10,6);
$rectangulo1->dibujar();
$rectangulo1->agrandar(5);
$rectangulo1->dibujar();
$rectangulo1->encoger(2);
$rectangulo1->dibujar();


$rectangulo2 = new Rectangulo(9,6);
$rectangulo2->dibujar();
$rectangulo2->agrandar(4);
$rectangulo2->dibujar();
$rectangulo2->encoger(3);
$rectangulo2->dibujar();


