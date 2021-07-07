<?php

    require '../config.php';

    $posts = (object) new Posts();

    $id = (int) $_POST['hid'];
    $posts->showPost($id);
