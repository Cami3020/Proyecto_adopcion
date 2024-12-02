<?php include('../includes/header.php'); ?>
<?php include('../includes/navbar.php'); ?>

<div class="container mt-5">
    <h1>Cuestionario de Adopción</h1>

    <form action="procesar_cuestionario.php" method="post">
        <div class="mb-3">
            <label for="pregunta1" class="form-label">¿Por qué deseas adoptar una mascota?</label>
            <textarea class="form-control" id="pregunta1" name="pregunta1" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label for="pregunta2" class="form-label">¿Tienes experiencia previa cuidando mascotas?</label>
            <textarea class="form-control" id="pregunta2" name="pregunta2" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enviar Cuestionario</button>
    </form>
</div>

<?php include('../includes/footer.php'); ?>
