<?php

abstract class Notas {
    protected $notas;

    public function __construct($notas) {
        $this->notas = $notas;
    }

    public abstract function toString();

    public function get_notas() {
        return $this->notas;
    }
}

?>
