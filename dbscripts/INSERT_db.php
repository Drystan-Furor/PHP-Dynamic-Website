<?php

// Een record toevoegen aan de database: ------ INSERT INTO

$sql = "INSERT INTO contacts (firstname, lastname, email, pass)
VALUES ('John', 'Doe', 'john@example.com', 'P@ssword')";
if ($databaseConnection->query($sql) === true) {
    $last_id = $databaseConnection->insert_id;
    //$activity3 = "New record created successfully: {$last_id}";
    $activity3 = "New record created successfully: 'John', 'Doe', 'john@example.com', 'P@ssword'";
} else {
    $error = "Error: " . $sql . "<br>" . $databaseConnection->error;
    $activity3 =  $error;
    error_log($error);
}

$sql = "DELETE FROM contacts WHERE id > 1";
if ($databaseConnection->query($sql) === true) {
}
