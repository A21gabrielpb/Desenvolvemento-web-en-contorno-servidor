<?php

include "Perro.php";
include "Gato.php";

$gato1 = new Gato("Simba", 3);
$gato1-> emitirSonido();

$gato2 = new Gato("Lucas", 1);
$gato2-> emitirSonido();
    

$perro1 = new Perro("Pol", 7);
$perro1-> emitirSonido();

$perro1 = new Perro("Coco", 5);
$perro1-> emitirSonido();