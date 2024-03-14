<?php

include "Persona.php";

class Administrador extends Persona{
 
    public function getId(){
        return $this->id;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function setNombre($nombre){
        $this->nombre=$nombre;
    }


    public function setApellidos($apellidos){
        $this->apellidos = $apellidos;
    }

    public function accion(){
        echo " Datos del Administrador1 \n";
        echo "Nombre: " . $this->getNombre() . "\n";
        echo "Apellido: " . $this->getApellidos() . "\n";
    
    }


 }

 $administrador1 = new Administrador(2, "Juan", "Gonzalez");
 $administrador1 ->accion();

 $administrador2 = new Administrador(1, "María", "Rey");
 $administrador2->accion();
