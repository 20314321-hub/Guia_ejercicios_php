<?php
$numero =$_POST["nombre"];
echo"<h2>tabla del:" . $numero ."</h2>";

for ($¡= 1; $¡ <= 10; $¡ ++) {
    $resultado = ($numero * $¡);
    echo $numero ."x". $¡."=" . $resultado ."<br>";
}
?>