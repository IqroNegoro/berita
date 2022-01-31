<?php 

class User_model extends Database {
    private $table = "users";
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getUser($data) {
        $nama = $data["nama"];
        $this->db->query("SELECT id, profile, nama, pass FROM $this->table WHERE nama = '$nama'");
        return $this->db->single();
    }

    public function getDetail($data) {
        $this->db->query("SELECT * FROM users LEFT JOIN berita ON users.nama=berita.kreator WHERE nama LIKE '%$data%'");
        return $this->db->result();
    }

    public function login($data) {
        $pass = hash("sha256", $data["password"]);
        $nama = $data["nama"];
        $this->db->query("SELECT id, nama, pass FROM users WHERE pass = '$pass' AND nama = '$nama'");
        return $this->db->single();
    }
    
}