<?php include('../includes/header.php'); ?>
<?php include('../includes/navbar.php'); ?>

<div class="container mt-5">
    <h1>Contacto</h1>
    <p>¿Tienes preguntas o deseas colaborar con nosotros? Completa el formulario de contacto y te responderemos lo antes posible.</p>

    <form action="enviar_mensaje.php" method="post">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="mb-3">
            <label for="correo" class="form-label">Correo Electrónico</label>
            <input type="email" class="form-control" id="correo" name="correo" required>
        </div>
        <div class="mb-3">
            <label for="mensaje" class="form-label">Mensaje</label>
            <textarea class="form-control" id="mensaje" name="mensaje" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>

<?php include('../includes/footer.php'); ?>
