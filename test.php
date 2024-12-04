<?php 
$clave="1234";
$hash_password = password_hash($clave,PASSWORD_BCRYPT);
echo $clave;
echo $hash_password;
