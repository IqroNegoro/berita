<?php 

class Login extends Controller {
    public function index() {
        $data["title"] = "Login";
        $data["style"] = "assets/css/login/style.css";
        $data["script"] = "assets/js/login/script.js";
        if (isset($_COOKIE["nama"])) {
            $data["cookie"] = true;
            $data["user"] = $this->model("User_model")->getUser($_COOKIE);
            $data["user"] = $this->model("Home_model")->parsingURL($data["user"]["nama"]);
            $data["user"]["url"] = $data["user"];
        }
        $this->view("Templates/header", $data);
        $this->view("login/index");
        $this->view("Templates/footer", $data);
    }

    public function log() {
        $data["success"] = $this->model("User_model")->login($_POST);
        if (count($data["success"]) > 0) {
            $data["success"]["url"] = $this->model("Home_model")->parsingURL($data["success"]["nama"]);
        }
        $this->view("login/log", $data);
    }
}

?>