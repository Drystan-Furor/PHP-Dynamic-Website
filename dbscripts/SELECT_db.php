<?php

$sql = "SELECT firstname, lastname, email, pass FROM contacts WHERE firstname = '$username' AND pass = '$password'";
$result = $databaseConnection->query($sql);

/*array(2) { 
    ["firstname"]=> string(4) "John" 
    ["pass"]=> string(8) "P@ssword" } 
*/

/*
// De database records tonen:  ------- SELECT
$sql = "SELECT id, firstname, lastname, email, pass FROM contacts";
$result = $databaseConnection->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        foreach ($row as $key => $value) {
            echo $key . ':  ' . $value;
            echo '<br>';
        }
        echo '<hr>';
    }
} else {
    echo "Geen resultaten gevonden";
    echo '<br>';
}
*/