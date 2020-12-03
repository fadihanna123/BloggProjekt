<?php

$posts = new Posts();
$show = $posts->info();

echo "<form action='add'>
	        Skapare :<br>
	        <input type='text' class='author' value='$show' size='100' disabled><br>
	        Titel: <br><input type='text' name='title' size='100' class='title' required><br>
	        Inlägg:<br>
	        <textarea rows='8' class='content' name='content' cols='106' required></textarea><br>
	        <input type='submit' class='add' value='Lägg till'>
	        <input type='hidden' name='author' value='$show'>
		</form>";
