<?php
require_once 'includes/functions.php';
require_once 'includes/loginhandler.php';
require_once 'includes/contacthandler.php';
?>



<!-- header file -->
<?php $title = 'ACTION';
require_once 'includes/header.php'; // plaats hier de header file
?>
<!-- header file -->



<!-- navigation file -->
<?php
require_once 'includes/navmenu.php';
?>
<!-- navigation file -->



<h1>
    Deze pagina verwerkt logins en emails
</h1>

<div class="container_activity">
    <p>
        <?php echo $welcomeUser ?><br>
        <?php echo $mailcheck ?> <br>
        <?php echo $mailSent ?>
    </p>
    <p>
        <?php if (isset($_POST['contact_submit'])) {
            echo 'Uw verzonden bericht:';
        } ?>
        <hr>
        <?php echo $bericht ?> <br>
    </p>
</div>



<!-- footer file -->
<?php
require_once 'includes/footer.php'; //afsluiten met footer file
?>
<!-- footer file -->