<?php
require_once 'dbscripts/dbconnect.php';
require_once 'dbscripts/CREATE_db.php';
require_once 'dbscripts/INSERT_db.php';
//username = John 
//pass = P@ssword
// if (login != this->username && login != this->pass) exit()
?>

<form action="action_page.php" method="post">

  <div class="login_container">
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <button type="submit" name="submit_login">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember_login"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="forgotpass">Forgot <a href="#">password?</a></span>
  </div>
</form>