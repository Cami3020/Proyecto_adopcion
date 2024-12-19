<?php 
include('../includes/header.php'); 
include('../includes/navbar.php');
include('../config/db.php');
echo"<button type='button' class='btn btn-warning' ><a href='agregar_mascota.php?'>Agregar Nuevo</a> </button>";
if (!isset($_SESSION['inicio_Sesion'])) {
    header("Location: ../views/login.php");
    exit;
}

$rol = $_SESSION['inicio_Sesion']['rol'];
$nombre = $_SESSION['inicio_Sesion']['nombre'];

if ($rol === 'refugio') {
    $sql = "SELECT * FROM mascotas WHERE refugio_id = (SELECT cedula FROM refugios WHERE nombre = '$nombre')";
} 

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table class='table' border='1'>
            <tr>
                <th scope='col'>Foto</th>
                <th scope='col'>Nombre</th>
                <th scope='col'>Edad</th>
                <th scope='col'>Raza</th>
                <th scope='col'>Personalidad</th>
                <th scope='col'>Estado</th>
                <th scope='col'>Detalles</th>";
    if ($rol === 'refugio') {
        echo "<th>Acciones</th>";
    }
    echo "</tr>";


    while ($row = $result->fetch_assoc()) {
        $foto = $row['foto'];

        // Verifica Foto
        if (filter_var($foto, FILTER_VALIDATE_URL)) {
            $imgSrc = $foto; // Es una URL completa
        } else {
            $imgSrc = "../uploads/{$foto}"; // Es una imagen local
        }

        echo "<tr>
                <td><img src='$imgSrc' width='100' /></td>
                <td>{$row['nombre']}</td>
                <td>{$row['edad']}</td>
                <td>{$row['raza']}</td>
                <td>{$row['personalidad']}</td>
                <td>{$row['estado']}</td>
                <td>{$row['detalles']}</td>
                <td>
                
                    <button type='button' class='btn  btn-light' ><a href='actualizar_mascota.php?id={$row['mascota_id']}'>Editar</a> </button> |
                    <button type='button' class='btn  btn-light' ><a href='eliminar_mascota.php?id={$row['mascota_id']}'>Eliminar</a> </button>
                </td>
                </tr>";
    }

    echo "</table>";
} else {
    echo "<p>No hay mascotas registradas.</p>";
}

include('../includes/footer.php');
?>
