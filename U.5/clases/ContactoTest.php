<?php
include 'Contacto.php';

$contacto1 = new Contacto("Marcos","Gomez","689 534 288");
$contacto2 = new Contacto("Gonzalo","Rey","986 732 564");
$contacto3 = new Contacto("Juan","Serrano","689 534 288");

echo "Información do primeiro contacto \n";
echo "Nombre: " . $contacto1->getNombre() . "\n";
echo "Apellido: " . $contacto1->getApellido() . "\n";
echo "Teléfono: " . $contacto1->getTelefono() . "\n";
echo "\n";

echo "Información do segundo contacto \n";
echo "Nombre: " . $contacto2->getNombre() . "\n";
echo "Apellido: " . $contacto2->getApellido() . "\n";
echo "Teléfono: " . $contacto2->getTelefono() . "\n";
echo "\n";

echo "Información do terceiro contacto \n";
echo "Nombre: " . $contacto3->getNombre() . "\n";
echo "Apellido: " . $contacto3->getApellido() . "\n";
echo "Teléfono: " . $contacto3->getTelefono() . "\n";
echo "\n";


$contacto1->muestraInformacion();
echo "\n";
$contacto2->muestraInformacion();
echo "\n";
$contacto3->muestraInformacion();

?>