<?php
class Chofer {
    private $nombre;
    private $apellido;
    private $documento;
    private $direccion;
    private $email;
    private $telefono;

    public function __construct($nombre, $apellido, $documento, $direccion, $email, $telefono) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->documento = $documento;
        $this->direccion = $direccion;
        $this->email = $email;
        $this->telefono = $telefono;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function getDocumento() {
        return $this->documento;
    }

    public function getDireccion() {
        return $this->direccion;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function __toString() {
        return "Nombre: " . $this->nombre . "\n" .
               "Apellido: " . $this->apellido . "\n" .
               "Documento: " . $this->documento . "\n" .
               "Dirección: " . $this->direccion . "\n" .
               "Email: " . $this->email . "\n" .
               "Teléfono: " . $this->telefono . "\n";
    }
}

?>