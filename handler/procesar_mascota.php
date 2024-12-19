<?php

include('../config/db.php');
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $raza = $_POST['raza'];
    $personalidad = $_POST['personalidad'];
    $foto = $_POST['foto'];
    $estado = $_POST['estado'];
    $detalles = $_POST['detalles'];

    if (!isset($_SESSION['inicio_Sesion'])) {
        header("Location: ../views/login.php");
        exit;
    }

    $rol = $_SESSION['inicio_Sesion']['rol'];
    $nombre_refugio = $_SESSION['inicio_Sesion']['nombre'];


    $query = "INSERT INTO mascotas (mascota_id, nombre, edad, raza, personalidad, foto, estado, detalles, refugio_id) 
    VALUES ('$id', '$nombre', '$edad', '$raza', '$personalidad', '$foto', '$estado', '$detalles', 
    (SELECT cedula FROM refugios WHERE nombre = '$nombre_refugio'))";
    
        if ($conn->query($query) === TRUE) {
            header("Location: ../views/index_refugio.php");
            echo "Refugio registrado con éxito.";
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }


}
