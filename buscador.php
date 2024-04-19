<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "suplementos";

$conn = new mysqli($servername, $username, $password, $database);

if (isset($_GET['Nombre'])) {
    $supl = $_GET['Nombre'];

    // Consulta SQL para buscar en la base de datos
    $sql = "SELECT * FROM Suplementos WHERE Nombre = '$supl'";

    // Ejecutar la consulta
    $resultado = $conn->query($sql);

    // Verificar si se encontraron resultados
    if ($resultado->num_rows > 0) {
        // Mostrar los resultados
        while ($fila = $resultado->fetch_assoc()) {
            echo "<p>Nombre del Producto: " . $fila['Nombre'] . "</p>";
            // Puedes mostrar más detalles del producto si lo deseas
        }
    } else {
        echo "<p>No se encontraron resultados para '" . $supl . "'</p>";
    }
}

$conn->close();

?>
