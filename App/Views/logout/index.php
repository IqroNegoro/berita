<?php 
setcookie("pass", "", time() - 3600, "/");
setcookie("id", "", time() - 3600, "/");
setcookie("nama", "", time() - 3600, "/");
header("Location: " . BASEURL);
?>
