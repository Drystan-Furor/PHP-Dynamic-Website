<?php

// De database records tonen:  ------- SELECT
$sql = "SELECT id, firstname, lastname, email FROM contacts";
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
