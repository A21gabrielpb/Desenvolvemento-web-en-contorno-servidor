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
    $this->ancho = $factor * $this->ancho;
    $this->alto = $factor * $this->alto;
    echo"Los nuevos datos encogidios son: \n";
    echo"Un ancho de " . $this->ancho . "\n";
    echo"Un alto de " . $this->alto . "\n";
 }
    
    // Método abstracto para encoger la figura
 public function encoger($factor){
    $this->alto  =  $this->alto / $factor;
    $this->ancho =  $this->ancho / $factor;
    echo"Los nuevos datos encogidios son: \n";
    echo"Un ancho de " . $this->ancho . "\n";
    echo"Un alto de " . $this->alto  . "\n"; 
}

}



