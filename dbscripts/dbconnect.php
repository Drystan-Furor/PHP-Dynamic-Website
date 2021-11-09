<?php

// Constanten aanmaken die overal kan aanroepen.
define('MYSQL_HOST', 'localhost');
define('MYSQL_PORT', '3307'); // of 3306. in Mamp preferences kun je zien wat het port nummer van de database is.
define('MYSQL_USERNAME', 'root');
define('MYSQL_PASSWORD', 'root');



// Verbinding met de database maken.
$databaseConnection = new mysqli(MYSQL_HOST, MYSQL_USERNAME, MYSQL_PASSWORD, null, MYSQL_PORT);

// Connectie controleren.
if ($databaseConnection->connect_error) {
    die("Connection failed: " . $databaseConnection->connect_error);
}