<?php 

class Home extends Controller {
    public function index() {
        $data["style"] = "assets/css/home/style.css";
        $data["title"] = "Okelah bang";
        $data["berita"] = $this->model("Home_model")->getBerita();
        $this->view("Templates/header", $data);
        $this->view("Templates/nav");
        $this->view("home/home", $data);
        $this->view("Templates/footer");
    }
}