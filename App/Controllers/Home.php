<?php 

class Home extends Controller {
    public function index() {
        $data["style"] = "assets/css/home/style.css";
        $data["title"] = "Homepage";
        $data["news"] = $this->model("Home_model")->getNewers();
        $data["popular"] = $this->model("Home_model")->getPopular();
        for ($i = 0; $i < count($data["news"]); $i++) {
            $data["news"][$i]["url"] = $this->model("Home_model")->parsingURL($data["news"][$i]["judul"]);
            $data["popular"][$i]["url"] = $this->model("Home_model")->parsingURL($data["popular"][$i]["judul"]);
            $data["news"][$i]["isi"] = $this->model("Home_model")->escape($data["news"][$i]["isi"]);
            $data["popular"][$i]["isi"] = $this->model("Home_model")->escape($data["popular"][$i]["isi"]);
        }
        if (isset($_COOKIE["nama"]) && strlen($_COOKIE["nama"]) > 1) {
            $nama["nama"] = $this->model("Home_model")->reparse($_COOKIE["nama"]);
            $data["user"] = $this->model("User_model")->getUser($nama);
            $data["user"]["url"] = $this->model("Home_model")->parsingURL($data["user"]["nama"]);
        }
        $this->view("Templates/header", $data);
        $this->view("Templates/nav", $data);
        $this->view("home/home", $data);
        $this->view("Templates/footer");
    }
    
    public function news($judul) {
        $data["style"] = "assets/css/home/news.css";
        $data["detail"] = $this->model("Home_model")->getNew($judul);
        $data["title"] = $data["detail"]["judul"];
        $data["detail"]["url"] = $this->model("Home_model")->parsingURL($data["detail"]["nama"]);
        if (isset($_COOKIE["nama"])) {
            $cooki["nama"] = $this->model("Home_model")->reparse($_COOKIE["nama"]);
            $data["user"] = $this->model("User_model")->getUser($cooki);
            $data["user"]["url"] = $this->model("Home_model")->parsingURL($data["user"]["nama"]);
        }
        $this->view("Templates/header", $data);
        $this->view("Templates/nav", $data);
        $this->view("home/news", $data);
        $this->view("Templates/footer");
    }
}