<?php include('../includes/header.php'); ?>
<?php include('../includes/navbar.php'); ?>

<div class="container mt-5">
    <h1 class="text-center mb-4">Recursos Educativos</h1>
    <p class="lead text-center">Descubre guías, artículos y consejos para ser un dueño responsable y mejorar la calidad de vida de tu mascota. ¡Te proporcionamos todo lo que necesitas para ofrecerle el mejor hogar a tu nueva mascota!</p>

    <div class="row">
        <!-- Primera columna -->
        <div class="col-md-4">
            <div class="card text-center shadow-sm equal-height-card">
                <div class="card-body">
                    <i class="bi bi-journal-text text-primary display-4 mb-3"></i> <!-- Icono de guía -->
                    <h5 class="card-title">Guía de Adopción Responsable</h5>
                    <p class="card-text">Aprende cómo realizar una adopción responsable con consejos esenciales para garantizar el bienestar de tu mascota. Desde la elección adecuada hasta el proceso de integración en tu hogar, esta guía te ayudará a tomar la mejor decisión.</p>
                    <a href="guia_adopcion.php" class="btn btn-primary mt-3">Leer la Guía</a>
                </div>
            </div>
        </div>
        <!-- Segunda columna -->
        <div class="col-md-4">
            <div class="card text-center shadow-sm equal-height-card">
                <div class="card-body">
                    <i class="bi bi-heart text-success display-4 mb-3"></i> <!-- Icono de corazón -->
                    <h5 class="card-title">Cuidado y Bienestar</h5>
                    <p class="card-text">Conoce los cuidados básicos que necesita tu mascota: alimentación, ejercicio y visitas al veterinario. Mantener a tu mascota sana y feliz es fundamental para una relación duradera.</p>
                    <a href="cuidado_bienestar.php" class="btn btn-success mt-3">Ver Consejos</a>
                </div>
            </div>
        </div>
        <!-- Tercera columna -->
        <div class="col-md-4">
            <div class="card text-center shadow-sm equal-height-card">
                <div class="card-body">
                    <i class="bi bi-house-door text-warning display-4 mb-3"></i> <!-- Icono de hogar -->
                    <h5 class="card-title">Hogar Temporal</h5>
                    <p class="card-text">¿Sabías que muchas mascotas necesitan un hogar temporal mientras encuentran a su familia definitiva? Te damos todas las recomendaciones para ser un hogar de transición ideal.</p>
                    <a href="hogar_temporal.php" class="btn btn-warning mt-3">Aprende más</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Sección adicional de artículos recomendados -->
    <div class="mt-5">
        <h2 class="text-center mb-4">Artículos Recomendados</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <img src="../img/articulo1.jpg" class="card-img-top" alt="Adopción de mascotas">
                    <div class="card-body">
                        <h5 class="card-title">5 Consejos para Adoptar un Perro</h5>
                        <p class="card-text">¿Estás pensando en adoptar un perro? Descubre 5 consejos clave para una adopción exitosa y para asegurarte de que tu nuevo amigo se sienta cómodo y bienvenido en su nuevo hogar.</p>
                        <a href="articulo1.php" class="btn btn-info">Leer más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <img src="../img/articulo2.jpg" class="card-img-top" alt="Cuidado de mascotas">
                    <div class="card-body">
                        <h5 class="card-title">Cómo Elegir la Comida Ideal para tu Mascota</h5>
                        <p class="card-text">La alimentación es un aspecto crucial para la salud de tu mascota. Aprende a elegir la comida adecuada según las necesidades de tu compañero peludo.</p>
                        <a href="articulo2.php" class="btn btn-info">Leer artículo</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php include('../includes/footer.php'); ?>

<!-- Estilos CSS adicionales -->
<style>
    /* Asegura que las tarjetas tengan la misma altura */
    .equal-height-card {
        display: flex;
        flex-direction: column;
        height: 100%;
    }

    .card-body {
        flex-grow: 1;
    }
</style>
