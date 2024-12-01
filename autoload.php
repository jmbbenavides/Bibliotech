<?php
define('PROJECT_ROOT', __DIR__);

spl_autoload_register(function ($class_name) {
    $file = PROJECT_ROOT . '/clases/' . $class_name . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
});