<?php
session_start();
require_once 'autoload.php';  // Cargar autoload

// Verificar si hay un usuario en sesión
if (!isset($_SESSION['usuario'])) {
    header('Location: index.php');
    exit;
}

$usuario = unserialize($_SESSION['usuario']);  // Deserializa el objeto de sesión
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - <?php echo $usuario->getNombre(); ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        nav a {
            display: block;
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <h1>Bienvenido, <?php echo $usuario->getNombre(); ?>!</h1>
    <h3>Rol: <?php echo $usuario->getRol(); ?></h3>

    <nav>
        <?php if ($usuario->getRol() === 'Administrador'): ?>
            <h2>Opciones para Administrador</h2>
            <a href="#">Agregar Libro</a>
            <a href="#">Editar Libro</a>
            <a href="#">Eliminar Libro</a>
            <a href="#">Gestionar Préstamos</a>
        <?php elseif ($usuario->getRol() === 'Empleado'): ?>
            <h2>Opciones para Empleado</h2>
            <a href="#">Agregar Libro</a>
            <a href="#">Buscar Libro</a>
        <?php elseif ($usuario->getRol() === 'Usuario'): ?>
            <h2>Opciones para Usuario</h2>
            <a href="#">Buscar Libro</a>
            <a href="#">Solicitar Préstamo</a>
        <?php endif; ?>
    </nav>

    <a href="logout.php">Cerrar Sesión</a>
</body>
</html>
