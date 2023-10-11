<?php
phpinfo();
$Nombre = $_POST['Nombre'];
$Escuela = $_POST['Escuela'];
$Edad = $_POST['Edad'];

echo "<h2> Informacion recibida :D </h2><br/>";
echo "Su nombre: " . $Nombre . "<br/>";
echo "Su escuela: " . $Escuela . "<br/>";
echo "Su edad: " . $Edad . "<br/>";
?>
