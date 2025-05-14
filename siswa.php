<?php
include 'koneksi.php';

class Siswa {
    private $conn;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->connect();
    }

    public function tampilData() {
        $sql = "SELECT * FROM siswa";
        $result = $this->conn->query($sql);
        $data = [];

        while($row = $result->fetch_assoc()) {
            $data[] = $row;
        }

        return $data;
    }
}
?>
