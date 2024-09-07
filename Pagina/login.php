<?php
$host = "localhost";
$db   = "prueba";
$user = "root";
$pass = "";

// Creador de conexion mysqli
$conn = new mysqli($host, $user, $pass, $db);

// verificador de conexion
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$username = $_POST['nombre_usuario'];
$email = $_POST['correo'];
$password = $_POST['contrasena'];

$sql = "SELECT * FROM usuarios WHERE nombre_usuario='$username' AND correo='$email' AND contrasena='$password'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Inicio de sesión exitoso";
    header('Location: index2.html');
} else {
    echo "Error en el inicio de sesión";
}

$conn->close();
?>
