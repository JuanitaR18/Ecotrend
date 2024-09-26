<?php
$server = "sql.freedb.tech";
$user = "freedb_JuanitaDB";
$pass = "Nd&AbpH6t@SS4Mk";
$dbname = "freedb_Registro";
$db_port = "3306";

// Crear conexión
$con1 = mysqli_connect($server, $user, $pass, $dbname, $db_port);

// Verificar la conexión
if (!$con1) {
    die("Conexión fallida: " . mysqli_connect_error());
}
?>