<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit;
}

$usuario = $_SESSION['usuario'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Perfil de <?php echo $usuario; ?></title>
</head>
<body>
    <h2>Bienvenido, <?php echo $usuario; ?></h2>
    <p>Esta es tu página de perfil. Puedes agregar más contenido aquí.</p>
    <a href="logout.php">Cerrar Sesión</a>
</body>
</html>
