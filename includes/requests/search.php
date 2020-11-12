<?php

require '../config.php';

$ord = $_POST['word'];

echo "<h3>Sökresultat för <b>" . $ord . "</b></h3>";
$searchsql = new Posts();
$searchsql->search($ord);

?>
