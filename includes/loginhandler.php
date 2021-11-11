<?php
/** 
 * ******************* 
 * Created by
*/

// ---------------------- LOGIN HANDLER
$welcomeUser = '';
if (isset($_POST['submit_login'])) {

    $username = Test_input($_POST['username']);
    $password = Test_input($_POST['password']);

    require_once 'dbscripts/dbconnect.php';
    require_once 'dbscripts/SELECT_db.php';

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $welcomeUser = 'Welkom ' . $row['firstname'] .
                " " . $row['lastname'] .
                ". Logged in with " . $row['email'] . PHP_EOL;
        }
    } else if ($result->num_rows <= 0) {
        $welcomeUser = 'username or password or combination of both does not exist' . PHP_EOL;
    }
} else if (!isset($_POST['submit_login'])) {
    $username = '';
    $password = '';
}
