<?php
$servername="localhost";
$username="root";
$password="";
$dbname="adopciones";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error){
    die("conexion fallida.");
}

?>
