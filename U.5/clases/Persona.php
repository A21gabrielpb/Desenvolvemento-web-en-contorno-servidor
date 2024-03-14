<?php

abstract class Persona{
    private $id;
    protected $nombre;
    protected $apellidos;

    abstract public function getId();
    abstract public function getNombre();
    abstract public function getApellidos();
    
    abstract public function setId($id);
    abstract public function setNombre($nombre);
    abstract public function setApellidos($apellidos);

    public function __construct($id,$nombre,$apellidos){
        $this->id=$id;
        $this->nombre=$nombre;
        $this->apellidos=$apellidos;
       
    }

    abstract public function accion();

}