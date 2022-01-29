<?php 

class Registrasi_model extends Database {
    private $table = "users";
    private $berita = "berita";
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function registrasiUser($data) {
        $this->db->query("INSERT INTO $this->table (nama, pass, email, reset) VALUES ('" . $data["nama"] . "', '" . $data["password"] . "', '" . $data["email"] . "', '" . $data["select"] . "')");
        return $this->db->affected();
    }
}