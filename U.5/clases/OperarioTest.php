<?php
include 'Operario.php';

$operario1 = new Operario("Juan", 1900, "diurno");
$operario2 = new Operario("María", 2000, "diurno");
$operario3 = new Operario("Liz", 2002, "tarde");
$operario4 = new Operario("Liz", 2002, "diurno");

echo "Operario 1 \n";
echo "Nombre: " . $operario1->getNombre() . "\n"; 
echo "Salario: " . $operario1->getSalario() . "\n";
echo "Turno: " . $operario1->getTurno() . "\n";  
echo "\n"; 


echo "Operario 2 \n";
echo "Nombre: " . $operario2->getNombre() . "\n"; 
echo "Salario: " . $operario2->getSalario() . "\n";
echo "Turno: " . $operario2->getTurno() . "\n";  
echo "\n"; 

echo "Operario 3 \n";
echo "Nombre: " . $operario3->getNombre() . "\n"; 
echo "Salario: " . $operario3->getSalario() . "\n";
echo "Turno: " . $operario3->getTurno() . "\n";  
echo "\n"; 


echo "Operario 4 \n";
echo "Nombre: " . $operario4->getNombre() . "\n"; 
echo "Salario: " . $operario4->getSalario() . "\n";
echo "Turno: " . $operario4->getTurno() . "\n";  
