<?php

class Alien {

    public static $numberOfAliens = 0; 

    public function __construct() {
        self::$numberOfAliens++;
}

    public function getNumberOfAliens() {
   return self::$numberOfAliens;
}

}
