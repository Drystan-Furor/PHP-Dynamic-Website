<?php

// Een record toevoegen aan de database: ------ INSERT INTO
$sql = "INSERT INTO contacts (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";
if ($databaseConnection->query($sql) === TRUE) {
    $last_id = $databaseConnection->insert_id;
    echo "New record created successfully: {$last_id}";
    echo '<br>';
} else {
    $error = "Error: " . $sql . "<br>" . $databaseConnection->error;
    echo $error;
    echo '<br>';
    error_log($error);
}
echo '<hr>';