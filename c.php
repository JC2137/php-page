<?php
// Datos de conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$database = "prueba";

// Establecer conexión con la base de datos
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Variable que deseas almacenar
$Nombre = $_POST["Nombre"];
$Apellidos = $_POST["Apellidos"];
$Usuario = $_POST["User"];
$Contraseña = $_POST["Contraseña"];
$Email = $_POST["Email"];

// Consulta SQL para insertar la variable en la tabla
$sql = "INSERT INTO prueba (Nombre,Apellidos ,User , Password, Email ) VALUES ('$Nombre','$Apellidos','$Usuario','$Contraseña','$Email')";

if ($conn->query($sql) === TRUE) {
    echo "Variable almacenada correctamente";
} else {
    echo "Error al almacenar la variable: " . $conn->error;
}

// Cerrar la conexión con la base de datos
$conn->close();
?>
