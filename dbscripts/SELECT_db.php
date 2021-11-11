<?php

$sql = "SELECT firstname, pass FROM contacts WHERE firstname = $username AND pass = $password";
$result = $databaseConnection->query($sql);

var_dump($result); 
//$singleRecord = $databaseConnection->query("SELECT firstname, pass FROM contacts WHERE firstname = $username AND pass = $password")->fetch_object();
$singleRecord = $databaseConnection->query("SELECT * FROM contacts WHERE id = 1")->fetch_object();
var_dump($singleRecord); 

object(stdClass)#3 (6) {
     ["id"]=> string(1) "1" 
     ["firstname"]=> string(4) "John" 
     ["lastname"]=> string(3) "Doe" 
     ["email"]=> string(16) "john@example.com" 
     ["pass"]=> string(8) "P@ssword" 
     ["created"]=> string(19) "2021-11-10 13:13:52" }
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