<?php 

class Registrasi_model extends Database {
    private $table = "users";
    private $berita = "berita";
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function encrypt($data) {
        $pass = hash("sha256", $data);
        return $pass;
    }

    public function registrasiUser($datas) {
        $datas["password"] = $this->encrypt($datas["password"]);
        // $this->db->query("INSERT INTO $this->table (nama, pass, email, reset) VALUES ('" . $datas["nama"] . "', '" . $datas["password"] . "', '" . $datas["email"] . "', '" . $datas["select"] . "')");
        return $this->db->affected();
    }
}