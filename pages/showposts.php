<?php

    $posts = (object) new Posts();
    $name = (string) $posts->info();

    echo '<section><b> ' . $name . ' </b>inlägg: </section>';
    
    $id = (int) isset($_POST['request']) ? $_POST['request'] : '';
    $posts->showPost($id);
