<?php

include('../config/db.php');
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $cedula = $_POST['cedula'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $ubicacion = $_POST['ubicacion'];
    $telefono = $_POST['telefono'];
    $password = $_POST['password'];
    $hash_password = password_hash($password, PASSWORD_BCRYPT);



    // Verifica si el correo ya está registrado
    $query  = "SELECT * FROM `refugios` WHERE correo = '$email'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $_SESSION['Registro_error_Refugio'] = [
            'error' => 'El correo ya está registrado para otro refugio. Por favor, use otro correo.',
            'mostrar_Refugio' => true
        ];
        header('Location: ../views/registro.php'); 
        exit();
    } else {
        $query = "INSERT INTO refugios (cedula, nombre, correo, ubicacion, telefono, password) 
               VALUES ('$cedula','$name', '$email', '$ubicacion', '$telefono','$hash_password')";

        // Ejecutar la consulta
        if ($conn->query($query) === TRUE) {
            $_SESSION['Registro'] = 'Refugio registrado con exito. Por favor inicie sesión';
            header('Location: ../views/login.php');
            echo "Refugio registrado con éxito.";
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }
    }
}
?>