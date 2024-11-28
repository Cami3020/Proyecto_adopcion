<?php include('../includes/header.php'); ?>
<?php include('../includes/navbar.php'); ?>

<div class="container mt-5">
    <h1>Perfil de Usuario</h1>
    <p>Bienvenido, <?php echo $_SESSION['nombre_usuario']; ?>.</p>
    <p>Correo: <?php echo $_SESSION['correo_usuario']; ?></p>

    <a href="editar_perfil.php" class="btn btn-warning">Editar Perfil</a>
    <a href="../logout.php" class="btn btn-danger">Cerrar Sesión</a>
</div>

<?php include('../includes/footer.php'); ?>
