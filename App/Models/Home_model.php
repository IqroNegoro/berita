<?php 

class Home_model extends Database {
    private $table = "berita";
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function escape($str) {
        $myStr = $this->db->quotes($str);
        $myStr = trim($myStr, "\'");
        $myStr = preg_replace("/\\\/", "", $myStr);
        return $myStr;
    }

    public function parsingURL($url) {
        $str = strtolower($url);
        $str = filter_var($str, FILTER_SANITIZE_STRING);
        $str = preg_replace('/[!@%&]/', "", "$str");
        $str = preg_replace('/\s/', "-", "$str");
        return $str;
    }
    
    public function reparse($url) {
        $str = preg_replace('/-/', " ", "$url");
        return $str;
    }

    public function getNewers() {
        $this->db->query("SELECT * FROM $this->table ORDER BY rilis DESC");
        return $this->db->result();
    }

    public function getPopular() {
        $this->db->query("SELECT * FROM $this->table ORDER BY view ");
        return $this->db->result();
    }

    public function getNew($judul) {
        $judul = $this->reparse($judul);
        $this->db->query("SELECT * FROM $this->table WHERE judul LIKE '%$judul%'");
        return $this->db->single();
    }
}