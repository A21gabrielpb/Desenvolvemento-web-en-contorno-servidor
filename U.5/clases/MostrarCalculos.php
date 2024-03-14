<?php

trait MostrarCalculos {
    public function saludar() {
        echo 'Bienvenido al centro de cálculo';
    }

    public function showCalculusStudyCenter($aprobados, $suspensos, $promedio) {
        echo "Sus resultados son \n";
        echo "Un total de $aprobados aprobados \n";
        echo "Un total de $suspensos aprobados \n";
        echo "Y una calificación promedio de $promedio";
    }


}