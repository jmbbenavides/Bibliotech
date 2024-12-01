<?php
require_once '../autoload.php';

$query = $_GET['query'] ?? '';
$resultados = Libro::buscarLibro($query);
?>

<h2>Resultados de la Búsqueda</h2>
<?php if (!empty($resultados)): ?>
    <ul>
        <?php foreach ($resultados as $libro): ?>
            <li><?php echo "{$libro->titulo} - {$libro->autor} ({$libro->categoria})"; ?></li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>No se encontraron resultados.</p>
<?php endif; ?>

