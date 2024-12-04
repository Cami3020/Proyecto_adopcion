
<?php

include('../config/db.php');
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $cedula = $_POST['cedula'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hash_password = password_hash($password, PASSWORD_BCRYPT);



    // Verifica si el correo ya está registrado
    $query  = "SELECT * FROM `usuarios` WHERE email = '$email'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $_SESSION['Registro_error'] = [
            'error' => 'El correo ya está registrado. Por favor, use otro correo.',
            'mostrar_usuario' => true
        ];
        header('Location: ../views/registro.php'); 
        exit();
    } else {
        $query = "INSERT INTO usuarios (nombre, email, password, cedula, fecha_registro, rol) 
               VALUES ('$name', '$email', '$hash_password', '$cedula', NOW(), 'Usuario')";

        // Ejecutar la consulta
        if ($conn->query($query) === TRUE) {
            $_SESSION['Registro'] = 'Usuario registrado con exito. Por favor inicie sesión';
            header('Location: ../views/login.php');
            echo "Usuario registrado con éxito.";
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }
    }
}
?>