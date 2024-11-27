<?php
include('../../config/db.php');

$id = $_GET['id'];

$stmt = $conn->prepare("DELETE FROM mascotas WHERE id = :id");
$stmt->bindParam(':id', $id);

if ($stmt->execute()) {
    header('Location: gestion_mascotas.php?mensaje=eliminado');
} else {
    header('Location: gestion_mascotas.php?mensaje=error');
}
