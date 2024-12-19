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
    $query = "UPDATE mascotas 
          SET nombre = '$nombre', 
              edad = '$edad', 
              raza = '$raza', 
              personalidad = '$personalidad', 
              foto = '$foto', 
              estado = '$estado', 
              detalles = '$detalles', 
              refugio_id = (SELECT cedula FROM refugios WHERE nombre = '$nombre_refugio') 
          WHERE mascota_id = '$id'";

    
        if ($conn->query($query) === TRUE) {
            header("Location: ../views/index_refugio.php");

        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }


}
