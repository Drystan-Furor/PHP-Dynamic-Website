<?php

/** 
 * @category Huiswerk, 9 - 2021
 * @author   "Tristan Arts <ArtsTristan@gmail.com>"
 */

require_once 'includes/functions.php'; // PHP functions file

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

<h1>
    Welkom
</h1>

<p>
    Dit is een huiswerkopdracht voor een PHP cursus. <br>
    Doel is een dynamische website die ook contact kan leggen met een database.<br>
    Ga naar de login pagina va het menu voor een login poging, <br>
<ul>
    <li>Username: John</li>
    <li>Password: P@ssword</li>
</ul>
Of ga naar Contact om te proberen een email te versturen.
</p>


<!-- footer file -->
<?php
require_once 'includes/footer.php'; //afsluiten met footer file
?>
<!-- footer file -->