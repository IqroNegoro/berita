<?php 

class Home_model extends Database {
    private $table = "berita";
    private $users = "users";
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function escape($str) {
        $myStr = $this->db->quotes($str);
        $myStr = trim($myStr, "\'");
        $myStr = preg_replace("/\\\/", "", $myStr);
        return $str;
    }

    public function parsingURL($url) {
        $str = strtolower($url);
        $str = preg_replace("/[!@#\$%\^&\*\(\)-_=\+\\\;\'\":\.\/\,\>\<\}\{]/", "", $str);
        $str = preg_replace('/\s+/', "-", $str);
        $str = preg_replace('/-+/', "-", $str);
        $str = rtrim($str, "-");
        return $str;
    }
    
    public function reparse($url) {
        $str = preg_replace("/-/", " ", $url);
        return $str;
    }

    public function getNewers() {
        $this->db->query("SELECT * FROM $this->table ORDER BY rilis DESC");
        return $this->db->result();
    }

    public function getPopular() {
        $this->db->query("SELECT * FROM $this->table ORDER BY view DESC");
        return $this->db->result();
    }

    public function getNew($judul) {
        $title = $this->reparse($judul);
        $this->db->query("UPDATE $this->table SET view = view + 1 WHERE judul LIKE '%$title%'");
        $this->db->execute();
        $this->db->query("SELECT judul, rilis, img, isi, view, kreator, profile, nama FROM $this->table LEFT JOIN $this->users ON $this->table.kreator=$this->users.nama WHERE judul LIKE '%%'");
        return $this->db->single();
    }

    public function getProfile() {
        
    }
}