<?php

class db
{
    public $conexion;

    public function conectar()
    {
        try {
            $this->conexion = new PDO('mysql:host=localhost;dbname=skillhive;charset=utf8', 'root', '');
            return $this->conexion;
        } catch (PDOException $e) {
            echo 'Error de conexión: ' . $e->getMessage();
        }
    }
}
