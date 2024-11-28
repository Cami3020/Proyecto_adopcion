<?php include('../../includes/header.php'); ?>
<?php include('../../includes/navbar.php'); ?>

<div class="container mt-5">
    <h1>Gestión de Usuarios</h1>
    <p>Añade, edita o elimina usuarios del sistema.</p>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Rol</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include('../../config/db.php');
            $stmt = $conn->query("SELECT * FROM usuarios");
            while ($usuario = $stmt->fetch(PDO::FETCH_ASSOC)) {
            ?>
                <tr>
                    <td><?php echo $usuario['nombre']; ?></td>
                    <td><?php echo $usuario['correo']; ?></td>
                    <td><?php echo ucfirst($usuario['rol']); ?></td>
                    <td>
                        <a href="editar_usuario.php?id=<?php echo $usuario['id']; ?>" class="btn btn-warning btn-sm">Editar</a>
                        <a href="eliminar_usuario.php?id=<?php echo $usuario['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este usuario?');">Eliminar</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php include('../../includes/footer.php'); ?>
