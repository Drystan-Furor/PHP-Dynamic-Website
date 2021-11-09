<?php
/* php */
// Constanten aanmaken die overal kan aanroepen.
define('MYSQL_HOST', 'localhost');
define('MYSQL_PORT', '8889'); // of 3306. in Mamp preferences kun je zien wat het port nummer van de database is.
define('MYSQL_USERNAME', 'root');
define('MYSQL_PASSWORD', 'root');
// Verbinding met de database maken.
$databaseConnection = new mysqli(MYSQL_HOST, MYSQL_USERNAME, MYSQL_PASSWORD, null, MYSQL_PORT);



// Connectie controleren.
if ($databaseConnection->connect_error) {
    die("Connection failed: " . $databaseConnection->connect_error);
}



// Een database aanmaken.
$sql = "CREATE DATABASE phpcursus";
if ($databaseConnection->query($sql) === TRUE) {
    echo "Database created successfully";
    echo '<br>';
} else {
    $error = "Error creating database: " . $conn->error;
    echo $error;
    echo '<br>';
    error_log($error);
}



// Selecteer de nieuwe database.
$databaseConnection->select_db("phpcursus");
// Een database tabel aanmaken.
$sql = "CREATE TABLE contacts (
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



// Een record toevoegen aan de database:
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



// Data uit de database verwijderen:
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



// De database records tonen:
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




// Database record updaten:
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




// Een enkele rij selecteren uit de database en teruggeven als object met properties.
$singleRecord = $databaseConnection->query("SELECT * FROM contacts WHERE id = 1")->fetch_object();
echo '<pre>';
print_r($singleRecord);




/* wanneer het om meerdere records gaat: */
echo '<hr>';
$result = $databaseConnection->query("SELECT * FROM contacts");
while ($obj = $result->fetch_object()) {
    printf("%d: %s %s\n", $obj->id, $obj->firstname, $obj->lastname);
}




// De database connectie sluiten. Dit wordt ook automatisch gedaan wanneer het script is afgelopen.
$databaseConnection->close();
