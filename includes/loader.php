<?php

	header('Content-Type: text/html; charset=utf-8');
	include 'config.php';

	if ($_POST['page'] && is_file("pages/{$_POST['page']}.php")) {
		include "pages/{$_POST['page']}.php";
	} else {
		print "Sidan existerar inte.";
	}

?>