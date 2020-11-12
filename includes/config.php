<?php

session_start();

error_reporting(-1);
ini_set("display_errors", 1);

spl_autoload_register(function ($class) {
    include 'classes/' . $class . '.class.php';
});

define("DBHOST", "SERVER");
define("DBDATABASE", "DB");
define("DBUSER", "USERNAME");
define("DBPASS", "PASSWORD");

?>
