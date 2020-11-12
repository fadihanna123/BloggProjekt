<?php

$posts = new Posts();
$name = $posts->info();
echo '<div><b> ' . $name . ' </b>inlägg: </div>';
$id = isset($_POST['request']) ? $_POST['request'] : '';
$posts->showPost($id);

?>
