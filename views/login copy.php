<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - Adopción Responsable</title>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    
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

<div class="container mt-5">
    <h3 class="text-center">Iniciar sesión</h3>
    <form action="login_handler.php" method="POST" class="col-md-6 mx-auto">
        <div class="mb-3">
            <label for="email" class="form-label">Correo Electrónico</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Iniciar sesión</button>
    </form>
    <p class="text-center mt-3">¿No tienes cuenta? <a href="registro.php">Regístrate aquí</a></p>
</div>

</body>
</html>
