<?php


// Data uit de database verwijderen: ------- DELETE
$sql = "DELETE FROM contacts WHERE id > 1 AND id < {$last_id}";
if ($databaseConnection->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    $error =  "Error deleting record: " . $databaseConnection->error;
    echo $error;
    echo '<br>';
    error_log($error);
}
echo '<hr>';
