<?php

    isset($_SESSION['email']) && header("location: index.php");

    require "../includes/config.php";

    $txt = (string) $_POST['usrtxt'];
    $pass = (string) $_POST['usrpass'];
    
    $posts = (object) new Posts();
    $posts->check($txt, $pass);
