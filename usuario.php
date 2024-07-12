<?php

class Usuario {
    // Propiedades privadas
    private $id;
    private $nombre;
    private $email;
    private $password;

    // Constructor
    public function __construct($id, $nombre, $email, $password) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->email = $email;
        $this->password = $password;
    }

    // Método getter para id
    public function getId() {
        return $this->id;
    }

    // Método setter para id
    public function setId($id) {
        $this->id = $id;
    }

    // Método getter para nombre
    public function getNombre() {
        return $this->nombre;
    }

    // Método setter para nombre
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    // Método getter para email
    public function getEmail() {
        return $this->email;
    }

    // Método setter para email
    public function setEmail($email) {
        // Validar el email antes de asignarlo
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->email = $email;
        } else {
            throw new Exception("Email no válido");
        }
    }

    // Método getter para password
    public function getPassword() {
        return $this->password;
    }

    // Método setter para password
    public function setPassword($password) {
        $this->password = $password;
    }
}

?>