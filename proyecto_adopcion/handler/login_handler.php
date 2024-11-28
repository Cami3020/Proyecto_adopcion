<?php
session_start();
require_once('../includes/db.php'); // Asume que tienes un archivo db.php para conectar con la base de datos

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtén los datos del formulario
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Consulta la base de datos para obtener el usuario con ese correo electrónico
    $sql = "SELECT * FROM usuarios WHERE email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        // Si las credenciales son correctas, guarda la sesión
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['nombre'];
        header("Location: ../index.php"); // Redirige al inicio después de iniciar sesión
    } else {
        // Si las credenciales son incorrectas
        $_SESSION['error'] = "Correo o contraseña incorrectos.";
        header("Location: ../login.php"); // Redirige de vuelta al formulario de inicio de sesión
    }
}
?>
