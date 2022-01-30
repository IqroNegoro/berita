<?php 

class User_model extends Database {
    private $table = "users";
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getUser($data) {
        $nama = $data["nama"];
        $this->db->query("SELECT id, nama, pass FROM $this->table WHERE id = '$nama'");
        return $this->db->single();
    }
}