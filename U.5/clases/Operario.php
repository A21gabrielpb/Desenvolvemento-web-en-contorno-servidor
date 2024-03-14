<?php

class Operario extends Empleado{
    private $turno;
    function __construct($nombre,$salario,$turno){
        self::$numEmpleados++;
        $this->nombre=$nombre;
        if($salario < 2000){
             $this->salario=$salario;
        }
        $this->turno=$turno; 
    }
    public function getTurno(){
        return $this->turno;
    }

    public function setTurno($turno) {
        if($turno === "diurno" || $turno === "nocturno"){
           $this->turno=$turno; 
       }else {
        echo "O turno so pode ser nocturno ou diurno";
       }
         
    }

}
?>