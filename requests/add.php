<?php

    require '../config.php';

    if (
        isset($_POST['author']) &&
        isset($_POST['title']) &&
        isset($_POST['content'])
    ) {
        $author = (string) $_POST['author'];
        $title = (string) $_POST['title'];
        $content = (string) $_POST['content'];

        $posts = (object) new Posts();
        $usrid = (int) $posts->showId();
        $posts->Add($author, $title, $content, $usrid);
    } else {
        print "Fyll in alla rutorna.";
    }
