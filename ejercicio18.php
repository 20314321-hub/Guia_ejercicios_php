<?php
$cliente =$_POST["cliente"];
$producto =$_POST["nombre1"];
$cantidad =$_POST["nombre2"];
$precio =$_POST["camtidad"];

$sudtotal = ($cantidad * $precio);
$total = ($sudtotal);

echo"<h1> Factura de venta</h1>";
echo"CLIENTE:" . $cliente ."<br>";
echo"PRODUCTO:" . $producto ."<br>";
echo"CANTIDAD:" . $cantidad ."<br>";
echo"PRECIO UNITARIA:" . $precio ."<br>";
echo"----------------<br>";
echo"SUDTOTAL:" . $sudtotal ."<br>";
echo"TOTAL A PAGAR:" . $total ."<br>" ;
?>