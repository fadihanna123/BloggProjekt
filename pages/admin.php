<?php

    echo "<h2>Mina inlägg</h2><br>";

    $posts = (object) new Posts();
    $showposts = (string) $posts->myPosts();
