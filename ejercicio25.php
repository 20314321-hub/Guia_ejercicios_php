<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") ;

    $nombre = htmlspecialchars($_POST['nombre']);
    $apellido = htmlspecialchars($_POST['apellido']);
    $email = htmlspecialchars($_POST['email']);


    echo "<h1>datos</h1>";
    echo "<p>Gracias, $nombre $apellido. por tus datos.</p>";
    echo "<p>Detalles:</p>";
    echo "<ul>";
    echo "<li>Email: $email</li>";
?>