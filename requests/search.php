<?php

require '../config.php';

$ord = (string)$_POST['word'];

echo "<h3>Sökresultat för <b>" . $ord . "</b></h3>";
$searchsql = (object) new Posts();
$searchsql->search($ord);
