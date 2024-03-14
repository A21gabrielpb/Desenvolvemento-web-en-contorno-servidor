<?php

include "Participante";

class Jugador extends Participante{

    public $posicion;

    public function __construct($nombre, $edad, $posicion){
        parent::__construct($nombre, $edad);
        $this->posicion = $posicion;
     }
    
     public function getPosicion(){
        return $this->posicion;}
    
    public function setPosicion($posicion){
        $this->posicion = $posicion;}
}


$jugador1 = new Jugador("Jeremías Ledesma",31,"portero");
$jugador2 = new Jugador("Take Kubo",22,"Centrocampista");


$jugador1->setNombre("Neymar Jr");
$jugador1->setEdad(30);
$jugador1->setPosicion("Defensa");


echo "Información de los jugadores:\n";
echo "Jugador 1: {$jugador1->getNombre()}, {$jugador1->getEdad()}, {$jugador1->getPosicion()}\n";
echo "Jugador 2: {$jugador2->getNombre()}, {$jugador2->getEdad()}, {$jugador2->getPosicion()}\n\n";


?>