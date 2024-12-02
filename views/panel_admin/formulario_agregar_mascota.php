<?php include('../../includes/header.php'); ?>
<?php include('../../includes/navbar.php'); ?>

<div class="container mt-5">
    <h1>Agregar Nueva Mascota</h1>

    <form action="procesar_mascota.php" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label for="imagen" class="form-label">Imagen</label>
            <input type="file" class="form-control" id="imagen" name="imagen" accept="image/*" required>
        </div>
        <div class="mb-3">
            <label for="estado" class="form-label">Estado</label>
            <select class="form-control" id="estado" name="estado" required>
                <option value="1">Disponible</option>
                <option value="0">Adoptada</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Agregar Mascota</button>
    </form>
</div>

<?php include('../../includes/footer.php'); ?>