<?php

$singleRecord = $databaseConnection->query("SELECT firstname, pass FROM contacts WHERE firstname = $username AND pass = $password")->fetch_object();

/*
// Een enkele rij selecteren uit de database en teruggeven als object met properties. --- SELECT als object
$singleRecord = $databaseConnection->query("SELECT * FROM contacts WHERE id = 1")->fetch_object();
echo '<pre>';
print_r($singleRecord);
*/

/* wanneer het om meerdere records gaat: 
echo '<hr>';
$result = $databaseConnection->query("SELECT * FROM contacts");
while ($obj = $result->fetch_object()) {
    printf("%d: %s %s\n", $obj->id, $obj->firstname, $obj->lastname);
}
*/