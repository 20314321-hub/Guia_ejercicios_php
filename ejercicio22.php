<?php
$dolares =$_POST["nombre"];
$tasa_cambio = 0.92;
$euros = ($dolares * $tasa_cambio);

echo"resultado de cabio<br>";
echo"los $ " .number_format($dolares,2) ."dolares equivale a:<br>" .number_format($euros,2). "₤(euros)<br>" ;
?>