<?php

require_once 'NotasDaw.php';

// Crear objeto de la clase NotasDaw
$notasDaw = new NotasDaw([7, 5, 9, 4, 6]);

// Invocar todos los métodos y mostrar los resultados
echo "Notas: " . $notasDaw->toString() . "\n";
echo "Número de aprobados: " . $notasDaw->numeroDeAprobados() . "\n";
echo "Número de suspensos: " . $notasDaw->numeroDeSuspensos() . "\n";
echo "Nota media: " . $notasDaw->notaMedia() . "\n";

?>
