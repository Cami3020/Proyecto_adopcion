<?php 
session_start();
$_SESSION["mostrarUs"] = false;
session_destroy();
header('Location: ../views/index.php');
exit;
?>