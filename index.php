<?php
echo "My first PHP script!";
echo "<br>";
echo "Mis datos:";
$nombre = "Rogelio";
$edad = 18;
$estatura = 1.70;
echo "Soy... "  . strtoupper($nombre) ."  tengo  ".$edad.   " años  mido "   . 
$estatura   .   " metros ";
echo "<br>";
var_dump(is_int($nombre));
echo "<br>";
$x = 34;
$y =356.78;
$z = $x+$y;
$a = $x * $y;
$b = $x - $y;
$c = $x / $y;
echo "La suma es $x + $y = $z";
echo "<br>";
echo "$x * $y = $a"; 
echo "<br>";
echo "$x - $y =$b";
echo "<br>";
echo "$x / $y =$c";
echo "<br>";

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primer php</title>
</head>
<body>
    Hola!!
</body>
</html>
