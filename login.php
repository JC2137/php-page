<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "prueba";

$conn = new mysqli($servername, $username, $password, $database);

$user = $_POST["User"];
$password = $_POST["Contraseña"];

$sql = "SELECT * FROM prueba WHERE User = '$user' AND Password = '$password'";

$result = $conn->query($sql);

if($result !== false && $result->num_rows > 0) {
    // Las credenciales son válidas, iniciar sesión
    $_SESSION['usuario'] = $user;
    header("Location: perfil.php");
    exit();
} else {
    echo ("inicio incorrecto");
}

$conn->close();
?>
