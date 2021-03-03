<?php

$posts = (object) new Posts();
$name = (string)$posts->info();
echo '<div><b> ' . $name . ' </b>inlägg: </div>';
$id = (int) isset($_POST['request']) ? $_POST['request'] : '';
$posts->showPost($id);
