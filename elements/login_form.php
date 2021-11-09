<?php 
?>
<form method="POST" action="werkblad.php">
<label for="firstname">First name:</label>
<input type="text" id="firstname" name="firstname" required><br><br>
<label for="email">email:</label>
<input type="email" id="email" name="email" required><br><br>
<label for="message">Message:</label>
<textarea id="message" name="message" rows="5" cols="50" required>
    </textarea>
    <input type="submit" value="Submit" name="submit">
</form>

<p>
<?php echo $report . PHP_EOL; ?><br>
Uw voornaam is: 
<?php echo $firstname . PHP_EOL; ?><br>
Uw achternaam is: 
<?php echo $email . PHP_EOL; ?><br>
Uw bericht is: 
<?php echo $message . PHP_EOL; ?><br>

</p>
