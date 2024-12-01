<?php
require_once __DIR__ . '/../clases/Libro.php';

class Biblioteca {
    private $libros = [];

    public function agregarLibro($libro) {
        $this->libros[] = $libro;
    }

    public function listarLibros() {
        return $this->libros;
    }

    public function buscarLibroPorTitulo($titulo) {
        foreach ($this->libros as $libro) {
            if (strtolower($libro->getTitulo()) === strtolower($titulo)) {
                return $libro;
            }
        }
        return null;
    }
}
?>
