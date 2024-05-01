<?php

class FruitDatabase {
    private static $instance = null;
    private $connection;

    private $host = 'localhost';
    private $user = 'root'; // Ganti dengan username MySQL Anda
    private $pass = ''; // Ganti dengan password MySQL Anda
    private $dbname = 'buah'; // Nama database

    private function __construct() {
        $this->connection = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
        if ($this->connection->connect_error) {
            die("Koneksi gagal: " . $this->connection->connect_error);
        }
    }

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new FruitDatabase();
        }
        return self::$instance;
    }

    public function getConnection() {
        return $this->connection;
    }
}
?>
