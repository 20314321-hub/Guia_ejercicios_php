<?php
$precio =$_POST["nombre"];
$porcentaje_iva = 0.13;
$iva = ($precio * $porcentaje_iva);
$precio_total = ($precio + $iva);
echo"<h2>calculo de total</h2><br>";
echo"precio base$:" .number_format($precio,2) ."<br>";
echo"iva (13%):$" .number_format($iva,2) ."<br>";
echo "-------------<br>";
echo"total a pagar:$" .number_format($precio,2)."<br>" ;
?>