<?php
	require '../config.php';
	$posts = new Posts();
	$id = $_POST['hid'];
	 $posts->showPost($id);
?>