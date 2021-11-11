<?php
// --------------------------- CONTACT HANDLER
$mailSent = "";
$mailcheck = '';
$bericht = '';
if (isset($_POST['contact_submit'])) {

    $email = Test_input($_POST['email']);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $mailcheck = "$email is not a valid email address";
        $mailSent = "mail send failed";
    } else {
        $mailcheck = "We will reply to " . $email;
        $bericht = Test_input($_POST['bericht']);
        $mailSent = "mail sent";


        // --- define mail parameters ---
        $to = 'user@example.com';
        $subject = 'Contact Request';
        $message = $bericht . "from" .  $email;
        $headers = [
            'From' => 'webmaster@example.com',
            'Reply-To' => 'webmaster@example.com',
            'X-Mailer' => 'PHP/' . phpversion()
        ];
        // mail($to, $subject, $message, $headers);
        /* mail(): Failed to connect to mailserver at "localhost" port 25, 
        verify your "SMTP" and "smtp_port" setting in php.ini or use ini_set() */
    }
} else if (!isset($_POST['contact_submit'])) {
    $email = '';
    $bericht = '';
} else {
    $mailSent = 'Failure to comply, please try again.';
}
