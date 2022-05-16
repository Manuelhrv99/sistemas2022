<?php

    $usuario = "sistemas...";
    $contrasena = "fsfsd...";

    try{
        $conn = new PDO('mysql:host=localhost;dbname=sistemas....', $usuario, $contrasena);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e)
    {
        echo "ERROR: " . $e->getMessage();
    }

?>