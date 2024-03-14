<?php
include 'Empleado.php';

$empleado1 = new Empleado("Juan", 1900);
$empleado2 = new Empleado("María", 2000);
$empleado3 = new Empleado("Liz", 2002);

echo "Empleado 1 \n";
echo "Nombre: " . $empleado1->getNombre() . "\n"; 
echo "Salario: " . $empleado1->getSalario() . "\n"; 
echo "\n"; 


echo "Empleado 2 \n";
echo "Nombre: " . $empleado2->getNombre() . "\n"; 
echo "Salario: " . $empleado2->getSalario() . "\n"; 
echo "\n"; 


echo "Empleado 3 \n";
echo "Nombre: " . $empleado3->getNombre() . "\n"; 
echo "Salario: " . $empleado3->getSalario() . "\n"; 

