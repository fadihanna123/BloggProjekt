<?php

require '../config.php';
$posts = (object) new Posts();

if (isset($_POST['postId'])) {
    $id = (int)$_POST['postId'];

    $posts->Delete($id);
    echo "<script>loader('admin');</script>";
} else {
    print "Fyll in alla rutorna.";
}
