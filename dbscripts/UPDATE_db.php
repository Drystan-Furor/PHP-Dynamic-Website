<?php

// Database record updaten: ------- UPDATE
$sql = "UPDATE contacts SET firstname = 'Jane', lastname = 'Doe', email = CONCAT(SUBSTRING(MD5(RAND()) FROM 1 FOR 8), '@example.tld') WHERE id = 1";
if ($databaseConnection->query($sql) === TRUE) {
    echo 'Record updated successfully';
} else {
    $error =  'Error updating record: ' . $databaseConnection->error;
    echo $error;
    echo '<br>';
    error_log($error);
}
echo '<hr>';
