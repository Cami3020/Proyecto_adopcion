
<?php
include('../config/db.php');
session_start();

if (!empty($_POST)) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `usuarios` where email = '" . $email . "'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        //revisa si es usuario
        while ($row = $result->fetch_assoc()) {
            if (password_verify($password, $row["password"])) {
                $_SESSION['inicio_Sesion'] = [
                    'nombre' => $row['nombre'],
                    'rol' => $row['rol'],
                    'mostrarUs' => true
                ];
                header("Location: ../includes/header.php");
                header("Location: ../views/index.php");
                exit;
            } else {
                $_SESSION['error_inicio'] = 'Error en la contraseña o en el usuario';
                header("Location: ../views/login.php");

                exit;
            }
        }
    } else {
        $sql = "SELECT * FROM `refugios` where correo = '" . $email . "'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            //revisa si es usuario
            while ($row = $result->fetch_assoc()) {
                if (password_verify($password, $row["password"])) {
                    $_SESSION['inicio_Sesion'] = [
                        'nombre' => $row['nombre'],
                        'rol' => 'refugio',
                        'mostrarUs' => true
                    ];
                    header("Location: ../includes/header.php");
                    header("Location: ../views/index.php");
                    exit;
                } else {
                    $_SESSION['error_inicio'] = 'Error en la contraseña o en el correo';
                    header("Location: ../views/login.php");

                    exit;
                }
            }
        } else {
            //si no existe refugio ni Usuario
            $_SESSION['usuario_inexistente'] = 'El usuario no existe. Intentelo nuevamente ';
            header("Location: ../views/login.php");

            exit;
        }
    }
}



