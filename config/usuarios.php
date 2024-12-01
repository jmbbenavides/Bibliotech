<?php
require_once PROJECT_ROOT . '/clases/Usuario.php';

$usuarios = [
    'admin' => new Usuario('Administrador', 'admin', 'admin123', 'Administrador'),
    'empleado' => new Usuario('Empleado', 'empleado', 'empleado123', 'Empleado'),
    'usuario' => new Usuario('Usuario', 'usuario', 'usuario123', 'Usuario')
];