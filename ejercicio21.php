<?php
$palabra = $_POST["nombre"];
$cantidad_letras = strlen($palabra);
echo"resultado<br>";
echo"la palabra<br><b>" .$palabra ."<br>" ."</b>tiene<br>" . $cantidad_letras ."letras<br>.";
?>