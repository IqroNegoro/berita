<?php

echo $data["success"];
if ($data["success"] === 1) {
    setcookie("id", $data["user"]["id"], time() + (60 * 60 * 24 * 30), "/");
    setcookie("nama", $data["user"]["nama"], time() + (60 * 60 * 24 * 30), "/");
    setcookie("pass", $data["user"]["pass"], time() + (60 * 60 * 24 * 30), "/");
}
    echo var_dump($data);