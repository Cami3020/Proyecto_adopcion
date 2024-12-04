<?php
include('../config/db.php');
session_start();

if(!empty($_POST)){
    $_SESSION ["email"] = $_POST['email'];
    $_SESSION ["password"] = $_POST['password'];

}

header("Location: ../views/index.php");