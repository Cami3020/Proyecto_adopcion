<?php
include('../config/db.php');
session_start();

if (!isset($_SESSION['inicio_Sesion']) ) {
    header("Location: ../views/login.php");
    exit;
}

if (isset($_GET['id'])) {
    $mascota_id = $_GET['id'];
    $sql_eliminar = "DELETE FROM mascotas WHERE mascota_id = '$mascota_id'";
        
        if ($conn->query($sql_eliminar) === TRUE) {
            header("Location: index_refugio.php");
            exit;
        } else {
            echo "Error al eliminar la mascota: " . $conn->error;
        }

    }
?>
