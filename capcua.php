<?php
function alreves($numero)
{
    $centenas = $numero / 100;
    $numero = $numero % 100;
    $decenas = $numero / 10;
    $unidades = $numero % 10;
}
// Inicio del código
$numero = 253;
$centenas = 2;
$decenas = 5;
$unidades = 3;
$alreves = ($unidades * 100) + ($decenas * 10) + $centenas;
echo "El número a invertir es: $numero";
echo "<br><br>";
echo "El número invertido es: $alreves";
echo "<br><br>";

function capicua($numero)
{

    if ($numero == $numero) {
        return true;
    } else {
        return false;
    }
}
//Inicio del código
$numero = 253;
if (capicua($numero))
    echo "$numero es capicúa";
else
    echo "$numero no es capicúa";
