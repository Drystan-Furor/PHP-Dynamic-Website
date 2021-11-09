<?php


// Een database aanmaken. ------- CREATE SCHEMA
$sql = "CREATE DATABASE IF NOT EXISTS phpcursus";
if ($databaseConnection->query($sql) === TRUE) {
    echo "Database created successfully";
    echo '<br>';
} else {
    $error = "Error creating database: " . $conn->error;
    echo $error;
    echo '<br>';
    error_log($error);
}




// Selecteer de nieuwe database. ------- CREATE TABLE
$databaseConnection->select_db("phpcursus");
// Een database tabel aanmaken.
$sql = "CREATE TABLE IF NOT EXISTS contacts (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    created TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";

if ($databaseConnection->query($sql) === TRUE) {
    echo "Table created successfully";
    echo '<br>';
} else {
    $error = "Error creating table: " . $databaseConnection->error;
    echo $error;
    echo '<br>';
    error_log($error);
}