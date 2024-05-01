<?php
require_once 'Mangga.php';

class Mangga {
    private $db;

    public function __construct() {
        $this->db = FruitDatabase::getInstance()->getConnection();
    }

    // Contoh fungsi untuk membuat tabel mangga
    public function createTable() {
        $sql = "CREATE TABLE IF NOT EXISTS mangga (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            rasa_buah VARCHAR(50) NOT NULL,
            jenis_buah VARCHAR(50) NOT NULL,
            bentuk_buah VARCHAR(50) NOT NULL
        )";

        if ($this->db->query($sql) === TRUE) {
            echo "Tabel mangga berhasil dibuat atau sudah ada.";
        } else {
            echo "Error: " . $this->db->error;
        }
    }

    // Fungsi untuk menambah data mangga
    public function tambahMangga($rasa, $jenis, $bentuk) {
        $sql = "INSERT INTO mangga (rasa_buah, jenis_buah, bentuk_buah)
                VALUES ('$rasa', '$jenis', '$bentuk')";

        if ($this->db->query($sql) === TRUE) {
            echo "Data mangga berhasil ditambahkan.";
        } else {
            echo "Error: " . $sql . "<br>" . $this->db->error;
        }
    }

    // Fungsi untuk mengambil data mangga
    public function ambilMangga() {
        $sql = "SELECT * FROM mangga";
        $result = $this->db->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "ID: " . $row["id"]. " - Rasa: " . $row["rasa_buah"]. " - Jenis: " . $row["jenis_buah"]. " - Bentuk: " . $row["bentuk_buah"]. "<br>";
            }
        } else {
            echo "Tidak ada data mangga.";
        }
    }

    // Fungsi untuk menghapus data mangga berdasarkan ID
    public function hapusMangga($id) {
        $sql = "DELETE FROM mangga WHERE id=$id";

        if ($this->db->query($sql) === TRUE) {
            echo "Data mangga dengan ID $id berhasil dihapus.";
        } else {
            echo "Error: " . $sql . "<br>" . $this->db->error;
        }
    }
}
?>
