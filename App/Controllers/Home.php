<?php 

class Home extends Controller {
    public function index() {
        $data["style"] = "assets/css/home/style.css";
        $data["title"] = "Homepage";
        $data["news"] = $this->model("Home_model")->getNewers();
        $data["popular"] = $this->model("Home_model")->getPopular();
        $data["profile"] = $this->model("Home_model")->getProfile();
        for ($i = 0; $i < count($data["news"]); $i++) {
            $data["news"][$i]["url"] = $this->model("Home_model")->parsingURL($data["news"][$i]["judul"]);
            $data["popular"][$i]["url"] = $this->model("Home_model")->parsingURL($data["popular"][$i]["judul"]);
            $data["news"][$i]["isi"] = $this->model("Home_model")->escape($data["news"][$i]["isi"]);
            $data["popular"][$i]["isi"] = $this->model("Home_model")->escape($data["popular"][$i]["isi"]);
        }
        $data["user"] = $this->model("User_model")->getUser($_COOKIE["nama"]);
        $this->view("Templates/header", $data);
        $this->view("Templates/nav", $data);
        $this->view("home/home", $data);
        $this->view("Templates/footer");
    }

    public function news($judul) {
        $data["style"] = "assets/css/home/news.css";
        $data["detail"] = $this->model("Home_model")->getNew($judul);
        $data["test"] = $this->model("Home_model")->reparse($judul);
        $data["title"] = $data["detail"]["judul"];
        $this->view("Templates/header", $data);
        $this->view("Templates/nav");
        $this->view("home/news", $data);
        $this->view("Templates/footer");
    }
}