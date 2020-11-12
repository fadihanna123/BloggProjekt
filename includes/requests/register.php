<?php

require '../config.php';
$posts = new Posts();

if (
    isset($_POST['fullnametxt']) &&
    isset($_POST['usrnametxt']) &&
    isset($_POST['passwordtxt']) &&
    isset($_POST['emailtxt'])
) {
    $fullname = $_POST['fullnametxt'];
    $usrname = $_POST['usrnametxt'];
    $password = $_POST['passwordtxt'];
    $email = $_POST['emailtxt'];

    $posts->doregister($fullname, $usrname, $password, $email);
} else {
    echo "Du måste fylla in de obligatoriska rutorna.";
}

?>
