<?php 
/** 
 * @category Huiswerk, 9 - 2021
 * @author   "Tristan Arts <ArtsTristan@gmail.com>"
 */

require_once 'includes/functions.php'; // PHP functions file
if (is_session_started() === false ) { // start een sessie tenzij een sessie al loopt.
    session_start();
}
?>



<!-- header file -->
<?php $title = 'HOME';
require_once 'includes/header.php'; // plaats hier de header file
?>
<!-- header file -->



<!-- navigation file -->
<?php
require_once 'includes/navmenu.php';
?>
<!-- navigation file -->



<h1>WELKOM</h1>



<!-- footer file -->
<?php
require_once 'includes/footer.php'; //afsluiten met footer file
?>
<!-- footer file -->