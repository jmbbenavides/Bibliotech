<?php
class Libro {
    private static $libros = [];

    public $id;
    public $titulo;
    public $autor;
    public $categoria;
    public $estado;

    public function __construct($titulo, $autor, $categoria) {
        $this->id = uniqid();
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->categoria = $categoria;
        $this->estado = 'disponible';
    }

    public static function agregarLibro($titulo, $autor, $categoria) {
        $nuevoLibro = new self($titulo, $autor, $categoria);
        self::$libros[] = $nuevoLibro;
        return $nuevoLibro;
    }

    public static function buscarLibro($query) {
        return array_filter(self::$libros, function($libro) use ($query) {
            return strpos(strtolower($libro->titulo), strtolower($query)) !== false ||
                   strpos(strtolower($libro->autor), strtolower($query)) !== false ||
                   strpos(strtolower($libro->categoria), strtolower($query)) !== false;
        });
    }

    public static function obtenerLibros() {
        return self::$libros;
    }
}
?>
