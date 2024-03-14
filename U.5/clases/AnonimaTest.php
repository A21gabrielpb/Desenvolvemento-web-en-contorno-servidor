<?php

$matematicas = new class() {
    public $base;
    public $altura;

    public function area() {
    $area = ($this->base * $this->altura) / 2;
    echo"El área del elemento de base" . $this->base . "y altura" . $this->altura . " es igual a = " . $area ;
    }

    public function perimetro() {
    $perimetro=  2 * $this->base + 2 * $this->altura;
    echo"El perimetro del elemento de base" . $this->base . "y altura" . $this->altura . " es igual a = " . $perimetro ;
    }
};

$matematicas->base = 4;
$matematicas->altura = 3;

$matematicas->area();
$matematicas->perimetro();
