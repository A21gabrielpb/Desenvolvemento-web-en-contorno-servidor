<?php 

include "ExcepcionPropia.php" ;

class ExcepcionPropiaClase {


public static function testnumber ($x) {
    if ($x = 0) {

        throw new ExcepcionPropia('El número es igual a 0');
    }
}

}
