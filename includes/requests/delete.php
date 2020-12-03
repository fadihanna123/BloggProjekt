<?php

require '../config.php';
$posts = new Posts();

if (isset($_POST['postId'])) {
    $id = $_POST['postId'];

    $posts->Delete($id);
    echo "<script>loader('admin');</script>";
} else {
    print "Fyll in alla rutorna.";
}
