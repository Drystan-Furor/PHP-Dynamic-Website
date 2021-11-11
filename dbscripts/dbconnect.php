<?php

// Constanten aanmaken die overal kan aanroepen.
define('MYSQL_HOST', 'localhost');
define('MYSQL_PORT', '3306'); // of 3306. in Mamp preferences kun je zien wat het port nummer van de database is.
define('MYSQL_USERNAME', 'root');
define('MYSQL_PASSWORD', 'SELECT*B4tr4ch10n');



// Verbinding met de database maken.
$databaseConnection = new mysqli(MYSQL_HOST, MYSQL_USERNAME, MYSQL_PASSWORD, null, MYSQL_PORT);

// Connectie controleren.
if ($databaseConnection->connect_error) {
    die("Connection failed: " . $databaseConnection->connect_error);
}

// require_once 'dbscripts/dbconnect.php';
$databaseConnection->select_db("phpcursus");


/*
$sql = "DROP DATABASE 'phpcursus'";
$result = $databaseConnection->query($sql);
*/