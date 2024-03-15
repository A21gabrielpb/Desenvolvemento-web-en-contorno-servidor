<?php

namespace e3;

include "Figura.php";

class Rectangulo extends Figura{

private $ancho;
private $alto;


public function __construct($ancho, $alto){
    $this->ancho = $ancho;
    $this->alto = $alto;

}

public function getAncho(){
    return $this->ancho;
}
public function getAlto(){
    return $this->alto;
}


public function dibujar(){
    echo "Se está dibujando una figura de las siguientes dimensiones \n";
    echo"Un ancho de " . $this->getAncho() . "\n";
    echo"Un alto de " . $this->getAlto() . "\n";
}
    
    // Método abstracto para agrandar la figura
  public function agrandar($factor){
    $anchoagrandado = $factor * $this->ancho;
    $altoagrandado = $factor * $this->alto;
    echo"Los nuevos datos encogidios son: \n";
    echo"Un ancho de " . $anchoagrandado . "\n";
    echo"Un alto de " . $altoagrandado . "\n";
 }
    
    // Método abstracto para encoger la figura
 public function encoger($factor){
    $altoencogido =  $this->alto / $factor;
    $anchoencogido =  $this->ancho / $factor;
    echo"Los nuevos datos encogidios son: \n";
    echo"Un ancho de " . $anchoencogido . "\n";
    echo"Un alto de " . $altoencogido . "\n"; 
}

}



