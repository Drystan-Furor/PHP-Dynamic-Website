<?php

if (isset($_POST['submit_login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo ("$email is a valid email address");
    } else {
        echo ("$email is not a valid email address");
    }
} else if (!isset($_POST['submit'])) {
    $username = '';
    $password = '';
} else {
    echo 'Failure';
}
