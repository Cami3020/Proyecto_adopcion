<?php
require_once('../includes/db.php'); // Asume que tienes un archivo db.php para conectar con la base de datos

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtén los datos del formulario
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Verifica si el correo ya está registrado
    $sql = "SELECT * FROM usuarios WHERE email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        // Si el correo ya está registrado, muestra un mensaje de error
        $_SESSION['error'] = "El correo electrónico ya está registrado.";
        header("Location: ../registro.php");
        exit;
    } else {
        // Si el correo no está registrado, inserta el nuevo usuario
        $hashed_password = password_hash($password, PASSWORD_DEFAULT); // Encripta la contraseña

        $sql = "INSERT INTO usuarios (nombre, email, password) VALUES (:nombre, :email, :password)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nombre', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $hashed_password);
        
        if ($stmt->execute()) {
            // Si el registro es exitoso, redirige al inicio de sesión
            $_SESSION['success'] = "Registro exitoso. Ahora puedes iniciar sesión.";
            header("Location: ../login.php");
        } else {
            // Si hay un error al registrar
            $_SESSION['error'] = "Hubo un error al registrar la cuenta. Inténtalo de nuevo.";
            header("Location: ../registro.php");
        }
    }
}
?>
