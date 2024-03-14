
<?php
class Empleado {

//PROPIEDADES
public $nombre;
public $salario;
public static $numEmpleados = 0;



//MÉTODOS
function __construct($nombre,$salario){
    self::$numEmpleados++;
    $this->nombre=$nombre;
    if($salario <= 2000){
         $this->salario=$salario;
    }else{
     echo "El salario no puede superar los 2000€";
    }

}
public function setNombre($nombre) {
    $this->nombre=$nombre;  
}
public function getNombre(){
    return $this->nombre;
}
public function getSalario(){
    return $this->salario;
}



}

?>