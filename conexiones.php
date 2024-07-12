<?php
class Conexion {
    private $host = 'localhost'; // Cambia esto si tu servidor de base de datos está en otro lugar
    private $db = 'nombre_base_datos'; // Nombre de tu base de datos
    private $user = 'usuario_db'; // Usuario de la base de datos
    private $password = 'clave_db'; // Contraseña del usuario
    private $charset = 'utf8mb4';
    private $pdo;

    public function __construct() {
        $this->connect();
    }

    private function connect() {
        try {
            $dsn = "mysql:host={$this->host};dbname={$this->db};charset={$this->charset}";
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false,
            ];
            $this->pdo = new PDO($dsn, $this->user, $this->password, $options);
        } catch (PDOException $e) {
            die('La conexión ha fallado: ' . $e->getMessage());
        }
    }

    public function getPDO() {
        return $this->pdo;
    }
}
?>