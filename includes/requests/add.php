<?php

require '../config.php';

if (
    isset($_POST['author']) &&
    isset($_POST['title']) &&
    isset($_POST['content'])
) {
    $author = $_POST['author'];
    $title = $_POST['title'];
    $content = $_POST['content'];

    $posts = new Posts();
    $usrid = $posts->showId();
    $posts->Add($author, $title, $content, $usrid);
} else {
    print "Fyll in alla rutorna.";
}
?>
