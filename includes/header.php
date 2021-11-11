<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <![endif]-->
<!-- ******************************************
*  Author : Tristan Arts   
*  Created On : Tue Nov 09 2021
*  File : index.html
******************************************* -->
<?php
if (is_session_started() === false) { // start een sessie tenzij een sessie al loopt.
    session_start();
}
?>

<!-- don't forget to set lang attribute-->
<html lang="nl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $title ?></title>
    <meta name="description" content="h a ring visboer webwinkel">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
</head>