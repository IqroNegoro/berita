<?php
if (isset($data["success"])) {
    setcookie("id", $data["success"]["id"], time() + (60 * 60 * 24 * 30), "/");
    setcookie("nama", $data["success"]["url"], time() + (60 * 60 * 24 * 30), "/");
    setcookie("pass", $data["success"]["pass"], time() + (60 * 60 * 24 * 30), "/");
    $output = '{ "nama" : "' . $data["success"]["url"] . '", "success" : "true"}';
    echo($output);
} else {
    echo('{"success" : "false"}');
}