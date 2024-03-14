 <?php

include "Persona.php";

class Usuario extends Persona{
 
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
        echo " Datos del Usuario \n";
        echo "Nombre: " . $this->getNombre() . "\n";
        echo "Apellido: " . $this->getApellidos() . "\n";
    
    }


 }

 $usuario1 = new Usuario(2, "Juan", "Gonzalez");
 $usuario1 ->accion();

 $usuario2 = new Usuario(1, "María", "Rey");
 $usuario2 ->accion();







 ?>