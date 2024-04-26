<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscador de Productos</title>
    <!-- Estilos CSS para mejorar el diseño -->
    <style>
        body {
            font-family: 'Roboto', sans-serif; /* Tipografía moderna */
            background: linear-gradient(to right, #f5f7fa, #c3cfe2); /* Fondo degradado */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Ocupa toda la altura del viewport */
            flex-direction: column; /* Organizar elementos verticalmente */
        }
        .header {
            text-align: center;
            background-color: #8D86C9; /* Fondo verde para el encabezado */
            color: black; /* Texto blanco */
            padding: 15px; /* Espaciado interno */
            border-radius: 10px; /* Bordes redondeados */
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1); /* Sombra sutil */
            font-size: 1.5em; /* Tamaño de fuente más grande */
            margin-bottom: 20px; /* Espacio entre el encabezado y el formulario */
        }
        .form-container {
            background-color: white; /* Fondo blanco para el formulario */
            padding: 30px; /* Más espacio interno */
            border-radius: 15px; /* Bordes redondeados */
            box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.2); /* Sombra más fuerte */
            transition: all 0.3s ease; /* Transiciones suaves */
        }
        .form-container:hover {
            box-shadow: 0 15px 25px 0 rgba(0, 0, 0, 0.3); /* Más sombra al pasar el ratón */
        }
        input[type="text"] {
            width: 100%; /* Campo de texto ancho */
            padding: 12px; /* Espaciado interno */
            border-radius: 8px; /* Bordes redondeados */
            border: 1px solid #ccc; /* Borde sutil */
            transition: all 0.3s ease; /* Transiciones suaves */
            margin-right: 10px;
        }
        input[type="text"]:focus {
            border-color: #4CAF50; /* Borde verde al hacer clic */
        }
        input[type="submit"] {
            margin-top: 10px;
            background-color: #4CAF50; /* Color verde para el botón */
            color: white; /* Texto blanco */
            padding: 12px 25px; /* Espaciado interno del botón */
            border-radius: 8px; /* Bordes redondeados */
            border: none; /* Sin borde */
            transition: all 0.3s ease; /* Transiciones suaves */
            cursor: pointer; /* Cambia el cursor al pasar por encima */
        }
        input[type="submit"]:hover {
            background-color: #45a049; /* Cambia el color del botón al pasar por encima */
            transform: translateY(-2px); /* Efecto de elevación */
        }
    </style>
</head>
<body>
    <!-- Encabezado separado del formulario -->
    <div class="header">Buscador de Productos</div>
    
    <!-- Formulario dentro de su propio contenedor -->
    <div class="form-container">
        <form method="GET" action="buscador.php">
            <input type="text" name="Nombre" placeholder="Ingrese su búsqueda">
            <input type="submit" value="Buscar">
        </form>
    </div>
</body>
</html>
