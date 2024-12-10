<?php include('../../includes/header.php'); ?>
<?php// include('../../includes/navbar.php'); ?>

<?php
include('../../config/db.php');
$id = $_GET['id'];
$stmt = $conn->prepare("SELECT * FROM mascotas WHERE id = :id");
$stmt->bindParam(':id', $id);
$stmt->execute();
$mascota = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<div class="container mt-5">
    <h1>Editar Mascota</h1>

    <form action="procesar_mascota.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $mascota['id']; ?>">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $mascota['nombre']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required><?php echo $mascota['descripcion']; ?></textarea>
        </div>
        <div class="mb-3">
            <label for="imagen" class="form-label">Imagen (opcional)</label>
            <input type="file" class="form-control" id="imagen" name="imagen" accept="image/*">
        </div>
        <div class="mb-3">
            <label for="estado" class="form-label">Estado</label>
            <select class="form-control" id="estado" name="estado" required>
                <option value="1" <?php echo $mascota['disponible'] ? 'selected' : ''; ?>>Disponible</option>
                <option value="0" <?php echo !$mascota['disponible'] ? 'selected' : ''; ?>>Adoptada</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
    </form>
</div>

<?php include('../../includes/footer.php'); ?>
