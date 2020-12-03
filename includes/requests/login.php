<?php

require '../config.php';

if (isset($_POST['usrtxt']) && isset($_POST['passtxt'])) {
    if (empty($_POST['usrtxt']) || strlen($_POST['usrtxt']) < 1) {
        print "Anv�ndarnamn ska vara minst 1 tecken.";
    } elseif (empty($_POST['passtxt']) || strlen($_POST['passtxt']) < 1) {
        print "L�senordet ska vara minst 1 tecken.";
    } else {
        if (isset($_SESSION['email'])) {
            echo "Du �r redan inloggad";
        } else {
            $txt = $_POST['usrtxt'];
            $pass = $_POST['passtxt'];
            $posts = new Posts();
            $posts->check($txt, $pass);
        }
    }
} else {
    print "Fyll in alla rutorna.";
}
