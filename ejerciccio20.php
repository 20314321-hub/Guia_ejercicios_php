<?php
$numero = $_POST["nombre"];
$suma = 0;

for($¡=1; $¡ <= $numero; $¡++) {
$suma =($suma + $¡); 
}
    echo"<h2>resultado</h2>";
    echo"la suma de los numeros<br>" . $numero . "es:" . $suma ;
?>