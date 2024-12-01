<?php
class Usuario {
    private $nombre;
    private $username;
    private $password;
    private $rol;

    public function __construct($nombre, $username, $password, $rol) {
        $this->nombre = $nombre;
        $this->username = $username;
        $this->password = $password;
        $this->rol = $rol;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getRol() {
        return $this->rol;
    }
}