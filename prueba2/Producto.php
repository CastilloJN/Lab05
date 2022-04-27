<?php 
    $numero1=$_POST['precioA'];
    $numero2=$_POST['unidades'];
    $precioN = $numero1 - 5 / 100 * $numero1;
    $importe = $numero2 * $precioN;
    $desc = 7 / 100 * $importe;
    $importeP = $importe - $desc ;
    $incentivo = $numero2 * 2;
    echo "Precio nuevo de la gaseosa: ".$precioN."<br>";
    echo "Importe de la compra: ".$importe."<br>";
    echo "Descuento: ".$desc."<br>";
    echo "Importe a pagar: ".$importeP."<br>";
    echo "Número de caramelos: ".$incentivo."<br>";
?>