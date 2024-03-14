<?php 

class Contacto{
    private $nombre;
    private $apellido;
    private $telefono;

    function __construct($nombre,$apellido,$telefono){
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->telefono=$telefono;

}

public function getNombre(){
    return $this->nombre;
}
public function getApellido(){
    return $this->apellido;
}
public function getTelefono(){
    return $this->telefono;
}

public function setNombre($nombre) {
    $this->nombre=$nombre;}

public function setApellido($apellido) {
    $this->apellido=$apellido;}

public function setTelefono($telefono) {
    $this->telefono=$telefono;}

public function muestraInformacion(){
    echo "Nombre: " . $this->getNombre() . "\n";
    echo "Apellido: " . $this->getApellido() . "\n";
    echo "Teléfono: " . $this->getTelefono() . "\n";

}



} 
?>