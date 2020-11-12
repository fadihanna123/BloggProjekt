
<?php
echo "<h2>Mina inlägg</h2><br>";

$posts = new Posts();
$showposts = $posts->myPosts();


?>
