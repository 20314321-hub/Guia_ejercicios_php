<?php
$nombre = $_POST["nombre"];
if ($nombre != "") {
    echo "Bicho, tu nombre es: " . $nombre;
} else {
    echo "No enviaste tu nombre. Vuelve al formulario e intenta de nuevo.";
}
?>