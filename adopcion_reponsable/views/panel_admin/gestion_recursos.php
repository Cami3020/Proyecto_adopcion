<?php include('../../includes/header.php'); ?>
<?php include('../../includes/navbar.php'); ?>

<div class="container mt-5">
    <h1>Gestión de Recursos</h1>
    <p>Añade, edita o elimina recursos educativos para los usuarios.</p>

    <form action="procesar_recurso.php" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="titulo" class="form-label">Título del Recurso</label>
            <input type="text" class="form-control" id="titulo" name="titulo" required>
        </div>
        <div class="mb-3">
            <label for="archivo" class="form-label">Archivo PDF</label>
            <input type="file" class="form-control" id="archivo" name="archivo" accept=".pdf" required>
        </div>
        <button type="submit" class="btn btn-primary">Subir Recurso</button>
    </form>
</div>

<?php include('../../includes/footer.php'); ?>
