<?php
session_start();
?>

<!DOCTYPE html>

<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adopción Responsable</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!-- Estilos personalizados -->
    <link rel="stylesheet" href="../css/base.css">

    <!-- Iconos de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

</head>

<body>

    <header class="bg-primary text-white py-2">
        <div class="container">
            <div class="row align-items-center">
                <!-- Logo y nombre de la página -->
                <div class="col-8 d-flex align-items-center">
                    <a class="navbar-brand d-flex align-items-center" href="../views/index.php">
                        <img src="../img/sitting.png" alt="Adopción Responsable" style="width: 100px; height: auto; filter: saturate(50%);">
                        <h2 class="d-inline-block ms-2" style="font-size: 1.5rem;">Adopción Responsable</h2>


                    </a>
                </div>

                <!-- Cuadros de inicio de sesión y registro (alineados a la derecha) -->
                <div class="col-4 text-end" id="sin_inicio_sesion" style="display: block;">
                    <!-- Cuadro de registro -->
                    <a href="../views/registro.php" class="btn btn-light btn-sm mx-2" style="border: 1px solid #ddd; border-radius: 4px; color: #333; text-transform: uppercase;">
                        <i class="bi bi-person-plus"></i> Registrarse
                    </a>
                    <!-- Cuadro de inicio de sesión -->
                    <a href="../views/login.php" class="btn btn-light btn-sm mx-2" style="border: 1px solid #ddd; border-radius: 4px; color: #333; text-transform: uppercase;">
                        <i class="bi bi-box-arrow-in-right"></i> Iniciar sesión
                    </a>
                </div>

                <!-- Cuadros de nombre del cliente y cerrar sesión -->
                <div class="col-4 text-end" id="se_inicio_sesion" style="display: none;">
                    <!-- Nombre -->
                    <?php if (isset($_SESSION['inicio_Sesion']['nombre'])): ?>
                            <?php echo  "<p>" . $_SESSION['inicio_Sesion']['nombre'] . "</p>";?>
                    <?php endif; ?>

                    <!-- Cuadro de cerrar  sesión -->
                    <a href="../views/logout.php" class="btn btn-light btn-sm mx-2" style="border: 1px solid #ddd; border-radius: 4px; color: #333; text-transform: uppercase;">
                        <i class="bi bi-box-arrow-in-left"></i> Cerrar Sección
                    </a>
                </div>

            </div>
        </div>

    </header>

    <script>
        function mostrarInicioYRegistro() {
            document.getElementById('sin_inicio_sesion').style.display = 'block';
            document.getElementById('se_inicio_sesion').style.display = 'none';
            
        }
    </script>

    <script>
        function mostrarUsuarioYLogout() {
            document.getElementById('se_inicio_sesion').style.display = 'block';
            document.getElementById('sin_inicio_sesion').style.display = 'none';
            
        }
            <?php if (isset($_SESSION['inicio_Sesion']['mostrarUs']) && $_SESSION['inicio_Sesion']['mostrarUs']): ?>
                mostrarUsuarioYLogout();
                
        <?php endif; ?>
        
    </script>
    
