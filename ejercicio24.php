<?php
$edad_actual = $_POST["nombre"];
$edad_futura = ($edad_actual + 10);
echo"<h2>prediccion</h2><br>";
echo"actual mente tienes:" . $edad_actual."años<br>";
echo "dentro de 10 años,tendras:<b>" . $edad_futura ."años</b>";
?>