<?php

require '../config.php';
$posts = new Posts();

if (
    isset($_POST['fullnametxt']) &&
    isset($_POST['usrnametxt']) &&
    isset($_POST['passwordtxt']) &&
    isset($_POST['emailtxt'])
) {
    $fullname = (string)$_POST['fullnametxt'];
    $usrname = (string)$_POST['usrnametxt'];
    $password = (string)$_POST['passwordtxt'];
    $email = (string)$_POST['emailtxt'];

    $posts->doregister($fullname, $usrname, $password, $email);
} else {
    echo "Du måste fylla in de obligatoriska rutorna.";
}
