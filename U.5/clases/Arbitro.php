<?php

include "Participante";
class Arbitro extends Participante{

 public $experiencia;

 public function __construct($nombre, $edad, $experiencia){
    parent::__construct($nombre, $edad);
    $this->experiencia = $experiencia;
 }


 public function getExperiencia(){
    return $this->experiencia;}

public function setExperiencia($experiencia){
    $this->experiencia = $experiencia;}
}

$arbitro1 = new Arbitro("Jesús Gil Manzano",40,12);
$arbitro2 = new Arbitro("Antonio Mateu Lahoz",46,13);




echo "Información de los arbitros:\n";
echo "Arbitro 1: {$arbitro1->getNombre()}, {$arbitro1->getEdad()}, {$arbitro1->getExperiencia()}\n";
echo "Arbitro 2: {$arbitro2->getNombre()}, {$arbitro2->getEdad()}, {$arbitro2->getExperiencia()}\n";

