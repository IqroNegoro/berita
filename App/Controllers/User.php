<?php 

class User extends Controller {
    public function index($user) {
        $data["style"] = "assets/css/user/style.css";
        $data["script"] = "assets/js/user/script.js";
        $data["detail"] = $this->model("Home_model")->reparse($user);
        $data["detail"] = $this->model("User_model")->getDetail($data["detail"]);
        for ($i = 0; $i < count($data["detail"]); $i++) {
            $data["title"] = $data["detail"][$i]["nama"];
            $data["detail"][$i]["url"] = $this->model("Home_model")->parsingURL($data["detail"][$i]["judul"]);
        }
        $data["url"] = $user;
        $this->view("Templates/header", $data);
        $this->view("user/nav", $data);
        $this->view("user/index", $data);
        $this->view("Templates/footer", $data);
    }
}