<?php
if ($data["success"] === 1) {
    setcookie("id", $data["user"]["id"], time() + (60 * 60 * 24 * 30), "/");
    setcookie("nama", $data["user"]["url"], time() + (60 * 60 * 24 * 30), "/");
    setcookie("pass", $data["user"]["pass"], time() + (60 * 60 * 24 * 30), "/");
    $output = '{ "nama" : "' . $data["user"]["url"] . '", "success" : "true"}';
    echo($output);
} else {
    echo('{"success" : "false"}');
}