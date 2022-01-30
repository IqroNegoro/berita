<?php

class Registrasi extends Controller
{
    public function index()
    {
        $data["style"] = "assets/css/registration/style.css";
        $data["title"] = "Registrasi";
        $data["script"] = "assets/js/registration/script.js";
        if (isset($_COOKIE["nama"])) {
            $data["cookie"] = true;
            $data["user"] = $this->model("User_model")->getUser($_COOKIE);
            $data["user"] = $this->model("Home_model")->parsingURL($data["user"]["nama"]);
        }
        $this->view("Templates/header", $data);
        $this->view("registration/index", $data);
        $this->view("Templates/footer", $data);
    }

    public function create()
    {
        $data["success"] = $this->model("Registrasi_model")->registrasiUser($_POST);
        if ($data["success"] === 1) {
            $data["success"] = 1;
            $data["user"] = $this->model("User_model")->getUser($_POST);
            $data["user"]["url"] = $this->model("Home_model")->parsingURL($data["user"]["nama"]);
        } else {
            $data["success"] = 0;
        }
        $this->view("registration/create", $data);
    }
}
