<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse - Adopción Responsable</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Estilos personalizados -->
    <link rel="stylesheet" href="../css/base.css">
</head>

<body>

    <header class="bg-primary text-white py-2">
        <div class="container text-center">
            <a class="navbar-brand d-flex justify-content-center align-items-center" href="index.php">
                <img src="../img/sitting.png" alt="Adopción Responsable" style="width: 100px; height: auto; filter: saturate(50%);">
                <h2 class="d-inline-block ms-2" style="font-size: 1.5rem;">Adopción Responsable</h2>
            </a>
        </div>
    </header>



    <div class="container mt-4" id="seleccion_registro" style="display: block;">
        <h1 class="display-4 text-center">Selecciona como te quieres registrar</h1>
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary me-2" onclick="mostrarFormulario('usuario')">Como Usuario</button>
            <button type="submit" class="btn btn-primary" onclick="mostrarFormulario('refugio')">Como Refugio</button>
        </div>
        <p class="text-center mt-3">¿Ya tienes cuenta? <a href="login.php">Inicia sesión aquí</a></p>
    </div>


    <?php if (isset($_SESSION['Registro_error']['error'])): ?>

        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?php echo $_SESSION['Registro_error']['error']; ?>
        </div>
    <?php endif; ?>
    <div class="container mt-5" id="usuario" style="display: none;">
        <h3 class="text-center">Registrarse Como Usuario</h3>
        <form action="../handler/register_Usuario_handler.php" method="POST" enctype="multipart/form-data" class="col-md-6 mx-auto">

            <div class="mb-3">
                <label for="name" class="form-label">Cedula</label>
                <input type="text" class="form-control" id="cedula" name="cedula" required>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Nombre Completo</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Registrarse</button>
        </form>
        <p class="text-center mt-3">¿Ya tienes cuenta? <a href="login.php">Inicia sesión aquí</a></p>
    </div>

    <?php if (isset($_SESSION['Registro_error_Refugio']['error'])): ?>

        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?php echo $_SESSION['Registro_error_Refugio']['error']; ?>
        </div>
    <?php endif; ?>
    <div class="container mt-5" id="refugio" style="display: none;">
        <h3 class="text-center">Registrarse Como Refugio</h3>
        <form action="../handler/register_Refugio_handler.php" method="POST" enctype="multipart/form-data" class="col-md-6 mx-auto">
            <div class="mb-3">
                <label for="name" class="form-label">Cedula Juridica</label>
                <input type="text" class="form-control" id="cedula" name="cedula" required>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="ubicacion" class="form-label">Ubicación</label>
                <input type="text" class="form-control" id="ubicacion" name="ubicacion" required>
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">Telefono</label>
                <input type="text" class="form-control" id="telefono" name="telefono" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Registrarse</button>
        </form>
        <p class="text-center mt-3">¿Ya tienes cuenta? <a href="login.php">Inicia sesión aquí</a></p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <script>
        function mostrarFormulario(tipo) {
            // Oculta ambos formularios
            document.getElementById('usuario').style.display = 'none';
            document.getElementById('refugio').style.display = 'none';

            // Muestra el formulario seleccionado
            document.getElementById(tipo).style.display = 'block';
            document.getElementById('seleccion_registro').style.display = 'none';
        }
    </script>

    <script>
        function mostrarFormularioUsuario() {
            document.getElementById('usuario').style.display = 'block';
            document.getElementById('seleccion_registro').style.display = 'none';
        }
        <?php if (isset($_SESSION['Registro_error']['mostrar_usuario']) && $_SESSION['Registro_error']['mostrar_usuario']): ?>
            mostrarFormularioUsuario();
        <?php endif; ?>
    </script>

    <script>
        function mostrarFormularioRefugio() {
            document.getElementById('refugio').style.display = 'block';
            document.getElementById('seleccion_registro').style.display = 'none';
        }
        <?php if (isset($_SESSION['Registro_error_Refugio']['mostrar_Refugio']) && $_SESSION['Registro_error_Refugio']['mostrar_Refugio']): ?>
            mostrarFormularioRefugio();
        <?php endif; ?>
    </script>
    <?php unset($_SESSION['Registro_error']); ?>
    <?php unset($_SESSION['Registro_error_Refugio']); ?>
</body>

</html>