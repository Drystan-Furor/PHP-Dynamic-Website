<?php

/**
 Create a function that will do all the checking for us
 */
function Test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

/**
 * @return bool
 */
function is_session_started()
{
    if (php_sapi_name() !== 'cli') {
        if (version_compare(phpversion(), '5.4.0', '>=')) {
            return session_status() === PHP_SESSION_ACTIVE ? true : false;
        } else {
            return session_id() === '' ? false : true;
        }
    }
    return false;
}

// Example
/*
if (is_session_started() === false ) { // start een sessie tenzij een sessie al loopt.
    session_start();
}   */