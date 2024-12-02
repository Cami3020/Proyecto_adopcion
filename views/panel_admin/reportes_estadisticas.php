<?php include('../../includes/header.php'); ?>
<?php include('../../includes/navbar.php'); ?>

<div class="container mt-5">
    <h1>Reporte de Estadísticas</h1>
    <p>Visualiza estadísticas sobre adopciones, usuarios y cuestionarios completados.</p>

    <div class="row">
        <div class="col-md-4">
            <div class="card text-white bg-primary mb-3">
                <div class="card-body">
                    <h5 class="card-title">Mascotas Disponibles</h5>
                    <p class="card-text">
                        <?php
                        include('../../config/db.php');
                        $stmt = $conn->query("SELECT COUNT(*) AS total FROM mascotas WHERE disponible = 1");
                        $disponibles = $stmt->fetch(PDO::FETCH_ASSOC);
                        echo $disponibles['total'];
                        ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-success mb-3">
                <div class="card-body">
                    <h5 class="card-title">Adopciones Realizadas</h5>
                    <p class="card-text">
                        <?php
                        $stmt = $conn->query("SELECT COUNT(*) AS total FROM mascotas WHERE disponible = 0");
                        $adoptadas = $stmt->fetch(PDO::FETCH_ASSOC);
                        echo $adoptadas['total'];
                        ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-warning mb-3">
                <div class="card-body">
                    <h5 class="card-title">Usuarios Registrados</h5>
                    <p class="card-text">
                        <?php
                        $stmt = $conn->query("SELECT COUNT(*) AS total FROM usuarios");
                        $usuarios = $stmt->fetch(PDO::FETCH_ASSOC);
                        echo $usuarios['total'];
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('../../includes/footer.php'); ?>
