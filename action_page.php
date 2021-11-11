<?php
require_once 'includes/functions.php';

// ---------------------- LOGIN HANDLER
if (isset($_POST['submit_login'])) {

    $username = Test_input($_POST['username']);
    $password = Test_input($_POST['password']);

    require_once 'dbscripts/dbconnect.php';
    require_once 'dbscripts/SELECT_db.php';

    if ($result == true) {
        echo 'Welkom';
        
    } else {
        echo "Geen resultaten gevonden";
    }
} else if (!isset($_POST['submit_login'])) {
    $username = '';
    $password = '';
} 




// --------------------------- CONTACT HANDLER
if (isset($_POST['contact_submit'])) {
    
    $email = Test_input($_POST['email']);
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo ("$email is a valid email address");
    } else {
        echo ("$email is not a valid email address");
    }

    $bericht = Test_input($_POST['bericht']);

    // --- define mail parameters ---
    $to = 'user@example.com';
    $subject = 'Contact Request';
    $message = $bericht . "from" .  $email;
    $headers = [
        'From' => 'webmaster@example.com',
        'Reply-To' => 'webmaster@example.com',
        'X-Mailer' => 'PHP/' . phpversion()
    ];

    header('Location: http://localhost/index.php');
    echo "mail sent";
    mail($to, $subject, $message, $headers);


} else if (!isset($_POST['contact_submit'])) {
    $email = '';
    $bericht = '';
} else {
    echo 'Failure';
}
