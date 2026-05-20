<?php
$nota1 = isset($_POST['nota1']) ? floatval($_POST['nota1']) : 0;
$nota2 = isset($_POST['nota2']) ? floatval($_POST['nota2']) : 0;
$nota3 = isset($_POST['nota3']) ? floatval($_POST['nota3']) : 0;

$promedio = ($nota1 + $nota2 + $nota3) / 3;

echo "<h1>";
echo "El promedio es: " . $promedio;
echo "</h1>";
if ($promedio >= 6) {
    echo"<h1>";
    echo"aprobo"; 
     } else {
        echo"reprobado";
     }
?>