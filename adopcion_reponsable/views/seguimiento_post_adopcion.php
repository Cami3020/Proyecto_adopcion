<?php include('../includes/header.php'); ?>
<?php include('../includes/navbar.php'); ?>

<div class="container mt-5">
    <h1>Seguimiento Post-Adopción</h1>
    <p>Envía un reporte sobre el estado de la mascota adoptada.</p>

    <form action="procesar_seguimiento.php" method="post">
        <div class="mb-3">
            <label for="mascota_id" class="form-label">Selecciona la mascota</label>
            <select class="form-control" id="mascota_id" name="mascota_id" required>
                <?php
                include('../config/db.php');
                $stmt = $conn->query("SELECT id, nombre FROM mascotas WHERE disponible = 0");
                while ($mascota = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo "<option value='{$mascota['id']}'>{$mascota['nombre']}</option>";
                }
                ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="reporte" class="form-label">Reporte</label>
            <textarea class="form-control" id="reporte" name="reporte" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enviar Reporte</button>
    </form>
</div>

<?php include('../includes/footer.php'); ?>
