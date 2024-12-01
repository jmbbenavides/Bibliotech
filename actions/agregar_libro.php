<?php
require_once '../autoload.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $categoria = $_POST['categoria'];

    Libro::agregarLibro($titulo, $autor, $categoria);
    header('Location: ../dashboard.php');
}
?>
