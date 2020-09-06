<?php

    require '../config.php';
    $posts = new Posts();

    if (isset($_POST['postId']) && isset($_POST['title']) && isset($_POST['content'])) {
        $id = $_POST['postId'];
        $title = $_POST['title'];
        $content = $_POST['content'];

        $posts->Edit($title, $content, $id);
        echo "<script>loader('admin');</script>";
    } else if (isset($_POST['postId'])) {
        $id = $_POST['postId'];
        $info = $posts->getInfo($id);

        echo "<form action='edit'>
            Titel: <br><input type='text' class='changetitle' name='title' value='{$info['titel']}' size='100' required><br>
            Inlägg:<br>
            <textarea rows='8' class='changecontent' name='content' cols='106' required>{$info['post']}</textarea><br>
            <input type='submit' class='add' value='Lägg till'>
            <input type='hidden' value='{$id}' name='postId' />
        </form>";
    } else {
        print "Fyll in alla rutorna.";
    }
    
?>