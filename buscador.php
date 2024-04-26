<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "suplementos";

// Conexión a la base de datos con manejo de errores
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$supl = $_GET['Nombre'] ?? null;

if ($supl) {
    // Consulta SQL segura para obtener detalles del suplemento
    $stmt = $conn->prepare("SELECT Nombre, Precio, Cantidad FROM Suplementos WHERE Nombre = ?");
    $stmt->bind_param("s", $supl); // Consulta preparada para evitar SQL injection
    $stmt->execute();
    $resultado = $stmt->get_result();

    // Verificar si se encontraron resultados
    if ($resultado->num_rows > 0) {
        // Incluir CSS para la tabla con estilo moderno
        echo "<style>
            body {
                font-family: 'Roboto', sans-serif;
                background: linear-gradient(to right, #f5f7fa, #c3cfe2);
                margin: 0;
                padding: 0;
                text-align: center;
            }
            table {
                border-collapse: collapse;
                width: 70%;
                margin: 20px auto;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1);
            }
            th, td {
                padding: 10px;
                text-align: center;
                border-bottom: 1px solid #ddd;
            }
            th {
                background-color: #009688;
                color: white;
            }
            tr:nth-child(even) {
                background-color: #f2f2f2;
            }
            tr:hover {
                background-color: #ddd;
            }
            h2 {
                color: #333;
            }
        </style>";

        // Crear encabezados para la tabla
        echo "<h2>Resultados de la Búsqueda</h2>";
        echo "<table>";
        echo "<tr><th>Nombre del Producto</th><th>Precio</th><th>Cantidad</th></tr>";

        // Mostrar los resultados en la tabla
        while ($fila = $resultado->fetch_assoc()) {
            echo "<tr>
                    <td>" . $fila['Nombre'] . "</td>
                    <td>" . $fila['Precio'] . "</td>
                    <td>" . $fila['Cantidad'] . "</td>
                  </tr>";
        }

        echo "</table>";
    } else {
        echo "<p>No se encontraron resultados para '" . $supl . "'</p>";
    }

    $stmt->close(); // Cerrar la consulta preparada
} else {
    echo "<p>Ingrese un nombre de producto para buscar.</p>";
}

$conn->close();

?>
