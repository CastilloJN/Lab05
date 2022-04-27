<?php
$numero1=$_POST['hijos'];
$numero2=$_POST['venta'];
$bonif = $numero1 *50;
$comis = $numero2 * 7.5 /100;
$suelB = 600 + $comis + $bonif;
$desc = 11 / 100 * $suelB;
$suelN = $suelB - $desc;
echo "Bonificación: ".$bonif."<br>";
echo "Comisión: ".$comis."<br>";
echo "Sueldo bruto: ".$suelB."<br>";
echo "Descuento: ".$desc."<br>";
echo "Sueldo Neto: ".$suelN."<br>";
?>
