<?php
$nombre =$_POST["nombre"];
$pisto = $_POST["camtidad"];
if ($pisto >=50) {
 $descuento = ($pisto * 0.10);
 echo"$nombre";
 echo"<br>";
 echo "reiviste un descuento:" . $descuento;
 }
?>