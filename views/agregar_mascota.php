<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse - Adopción Responsable</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Estilos personalizados -->
    <link rel="stylesheet" href="../css/base.css">
</head>

<body>

    <header class="bg-primary text-white py-2">
        <div class="container text-center">
            <a class="navbar-brand d-flex justify-content-center align-items-center" href="index.php">
                <img src="../img/sitting.png" alt="Adopción Responsable" style="width: 100px; height: auto; filter: saturate(50%);">
                <h2 class="d-inline-block ms-2" style="font-size: 1.5rem;">Adopción Responsable</h2>
            </a>
        </div>
    </header>


    <div class="container mt-5" id="usuario">
        <h3 class="text-center">Agregar Nuevo</h3>
        <form action="../handler/procesar_mascota.php" method="POST" class="col-md-6 mx-auto">
            <div class="mb-3">
                <label for="id" class="form-label">Id mascota:</label>
                <input type="text" class="form-control" id="id" name="id" required>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="mb-3">
                <label for="edad" class="form-label">Edad</label>
                <input type="text" class="form-control" id="edad" name="edad" required>
            </div>
            <div class="mb-3">
                <label for="raza" class="form-label">Raza</label>
                <input type="text" class="form-control" id="raza" name="raza" required>
            </div>
            <div class="mb-3">
                <label for="personalidad" class="form-label">Personalidad</label>
                <input type="text" class="form-control" id="personalidad" name="personalidad" required>
            </div>
            <div class="mb-3">
                <label for="foto" class="form-label">Foto</label>
                <input type="text" class="form-control" id="foto" name="foto" required>
            </div>
            <div class="mb-3">
                <label for="estado" class="form-label">Estado</label>
                <select id="estado" name="estado" class="form-select" aria-label="Default select example">
                    <option value="Disponible">Disponible</option>
                    <option value="No Disponible">No Disponible</option>
                    <option value="En proceso de Adopción">En proceso de Adopción</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="detalles" class="form-label">Detalles</label>
                <input type="text" class="form-control" id="detalles" name="detalles" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Ingresar</button>
        </form>
    </div>



</body>

</html>