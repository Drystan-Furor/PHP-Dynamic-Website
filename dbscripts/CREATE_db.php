<?php


// Een database aanmaken. ------- CREATE SCHEMA
$sql = "CREATE DATABASE IF NOT EXISTS phpcursus";
if ($databaseConnection->query($sql) === true) {
    $activity = "Database created successfully";
} else {
    $error = "Error creating database: " . $conn->error;
    $activity = $error;
    error_log($error);
}




// Selecteer de nieuwe database. ------- CREATE TABLE
$databaseConnection->select_db("phpcursus");
// Een database tabel aanmaken.
$sql = "CREATE TABLE IF NOT EXISTS contacts (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    pass VARCHAR(16),
    created TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";

if ($databaseConnection->query($sql) === TRUE) {
    $activity2 = "Table created successfully";
} else {
    $error = "Error creating table: " . $databaseConnection->error;
    $activity2 = $error;
    error_log($error);
}
