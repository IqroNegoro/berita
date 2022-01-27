<?php 

class Home extends Controller {
    public function index() {
        $data["style"] = "assets/css/home/style.css";
        $data["title"] = "Okelah bang";
        $this->view("Templates/header", $data);
        $this->view("Templates/nav");
        $this->view("home/home");
        $this->view("Templates/footer");
    }
}