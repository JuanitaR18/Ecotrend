<?php
include 'dbcon.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nombre_completo = mysqli_real_escape_string($con1, $_POST['nombre_completo']);
    $correo = mysqli_real_escape_string($con1, $_POST['correo']);
    $usuario = mysqli_real_escape_string($con1, $_POST['usuario']);
    $password = mysqli_real_escape_string($con1, $_POST['password']);

    
    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios (nombre_completo, correo, usuario, password) VALUES ('$nombre_completo', '$correo', '$usuario', '$password_hash')";

    if (mysqli_query($con1, $sql)) {
        session_start();
        $_SESSION['registroExitoso'] = "Registro exitoso. Puedes iniciar sesión ahora.";
        header("Location: index.html");
        exit();
    } else {
        
        echo "Error al registrar: " . mysqli_error($con1);
        exit(); 
}

mysqli_close($con1); 