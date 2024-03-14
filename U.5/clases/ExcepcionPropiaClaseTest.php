<?php 

include "ExcepcionPropiaClase.php" ;

try {
    ExcepcionPropiaClase::testNumber(4);
    echo "El número introducido es distinto de 0 ";
    ExcepcionPropiaClase::testNumber(0); 
    echo "Esto no se imprimirá";
} catch (ExcepcionPropia $e) {
    echo "Se ha producido una excepción personalizada: " . $e->getMessage() . "";
} catch (Exception $e) {
    echo "Se ha producido una excepción: " . $e->getMessage() . "";
}