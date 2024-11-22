<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="../Estilos/base.css">
</head>
<body>
    <header>
    <header class="top-header">
        <h1>Panel de Administración</h1>
        <p>Plataforma de Adopción Responsable</p>
    </header>
        <nav class="main-nav">
            <a href="#mascotas" class="nav-item active">Gestión de Mascotas</a>
            <a href="#usuarios" class="nav-item">Gestión de Usuarios</a>
            <a href="#cuestionarios" class="nav-item">Cuestionarios de Evaluación</a>
            <a href="#seguimiento" class="nav-item">Seguimiento Post-Adopción</a>
            <a href="#notificaciones" class="nav-item">Notificaciones</a>
            <a href="#refugios" class="nav-item">Gestión de Refugios</a>
            <a href="#estadisticas" class="nav-item">Estadísticas y Reportes</a>
        </nav>
    </header>
    <main>
        <?php echo $content ?? ''; ?>
    </main>
    <footer>
        <p style="padding-top: 5px; text-align: center;">&copy; <?php echo date('Y'); ?> G7. Adopción Responsable. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
