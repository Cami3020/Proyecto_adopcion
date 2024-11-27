<?php include('../includes/header.php'); ?>
<?php include('../includes/navbar.php'); ?>

<div class="container mt-5">
    <h1>Explorar Mascotas</h1>
    <p>Encuentra a tu futura mascota explorando entre los perfiles disponibles:</p>

    <div class="row">
        <?php
        include('../config/db.php');
        $stmt = $conn->query("SELECT * FROM mascotas WHERE disponible = 1");
        while ($mascota = $stmt->fetch(PDO::FETCH_ASSOC)) {
        ?>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="img/<?php echo $mascota['imagen']; ?>" class="card-img-top" alt="Imagen de <?php echo $mascota['nombre']; ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $mascota['nombre']; ?></h5>
                        <p class="card-text"><?php echo $mascota['descripcion']; ?></p>
                        <a href="detalle_mascota.php?id=<?php echo $mascota['id']; ?>" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<?php include('../includes/footer.php'); ?>
