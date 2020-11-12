<?php

if (isset($_SESSION['email'])) {
    header("location: index.php");
}
require "../includes/config.php";
$txt = $_POST['usrtxt'];
$pass = $_POST['usrpass'];
$posts = new Posts();
$posts->check($txt, $pass);

?>
