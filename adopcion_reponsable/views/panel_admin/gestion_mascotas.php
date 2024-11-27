<?php include('../../includes/header.php'); ?>
<?php include('../../includes/navbar.php'); ?>

<div class="container mt-5">
    <h1>Gestión de Mascotas</h1>
    <p>Añade, edita o elimina perfiles de mascotas en la base de datos.</p>

    <a href="formulario_agregar_mascota.php" class="btn btn-success mb-3">Agregar Nueva Mascota</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include('../../config/db.php');
            $stmt = $conn->query("SELECT * FROM mascotas");
            while ($mascota = $stmt->fetch(PDO::FETCH_ASSOC)) {
            ?>
                <tr>
                    <td><?php echo $mascota['nombre']; ?></td>
                    <td><?php echo $mascota['descripcion']; ?></td>
                    <td><?php echo $mascota['disponible'] ? 'Disponible' : 'Adoptada'; ?></td>
                    <td>
                        <a href="formulario_editar_mascota.php?id=<?php echo $mascota['id']; ?>" class="btn btn-warning btn-sm">Editar</a>
                        <a href="eliminar_mascota.php?id=<?php echo $mascota['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar esta mascota?');">Eliminar</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php include('../../includes/footer.php'); ?>
