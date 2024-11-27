<?php
include('../../config/db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'] ?? null;
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $estado = $_POST['estado'];
    $imagen = $_FILES['imagen']['name'];

    if ($imagen) {
        $ruta = "../../img/" . basename($imagen);
        move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta);
    }

    if ($id) {
        // Actualizar mascota
        $sql = "UPDATE mascotas SET nombre = :nombre, descripcion = :descripcion, disponible = :estado";
        if ($imagen) {
            $sql .= ", imagen = :imagen";
        }
        $sql .= " WHERE id = :id";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
    } else {
        // Insertar nueva mascota
        $sql = "INSERT INTO mascotas (nombre, descripcion, disponible, imagen) VALUES (:nombre, :descripcion, :estado, :imagen)";
        $stmt = $conn->prepare($sql);
    }

    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':descripcion', $descripcion);
    $stmt->bindParam(':estado', $estado);
    if ($imagen) {
        $stmt->bindParam(':imagen', $imagen);
    }

    if ($stmt->execute()) {
        header('Location: gestion_mascotas.php?mensaje=exito');
    } else {
        header('Location: gestion_mascotas.php?mensaje=error');
    }
}
