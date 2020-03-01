<?php
	$posts = new Posts();
	$posts->Edit($_POST['changetitle'], $_POST['changecontent'], $_POST['session']);
 ?>