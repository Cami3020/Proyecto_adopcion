<?php include('../includes/header.php'); ?>
<?php include('../includes/navbar.php'); ?>

<div class="container mt-5">
    <h2 class="text-center mb-4">Mascotas Disponibles</h2>
    <div class="row">
        <!-- Ejemplo de una tarjeta de mascota -->
        <div class="col-md-4">
            <div class="card shadow-sm">
                <img src="../img/perro1.jpg" class="card-img-top" alt="Perro">
                <div class="card-body">
                    <h5 class="card-title">Fido</h5>
                    <p class="card-text">Un perro amigable en busca de un hogar amoroso.</p>
                    <a href="detalle_mascota.php?id=1" class="btn btn-primary">
                        <i class="bi bi-info-circle"></i> Ver Detalles
                    </a>
                </div>
            </div>
        </div>
        <!-- Repite esta estructura para más mascotas -->
        <div class="col-md-4">
            <div class="card shadow-sm">
                <img src="../img/gato1.jpg" class="card-img-top" alt="Gato">
                <div class="card-body">
                    <h5 class="card-title">Michi</h5>
                    <p class="card-text">Un gato cariñoso que disfruta de largas siestas.</p>
                    <a href="detalle_mascota.php?id=2" class="btn btn-primary">
                        <i class="bi bi-info-circle"></i> Ver Detalles
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('../includes/footer.php'); ?>
