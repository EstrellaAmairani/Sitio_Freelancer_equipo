<?php

    $conn = new mysqli('localhost', 'root','1234','bd_eabl');

    if($conn->connect_error){
        die("Error en la conexion" . $conn->connect_error);
    }

?>
