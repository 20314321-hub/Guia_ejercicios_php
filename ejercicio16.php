<?php
$nombre =$_POST["nombre"];
$horas =$_POST["horas"];
$salaridehora =$_POST["nota3"];
$salario = ($horas * $salaridehora);
echo" $nombre";
echo"<br>";
echo "tusario es:" . $salario;
?>