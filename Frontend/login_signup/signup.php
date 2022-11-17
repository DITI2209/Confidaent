<?php 
session_start();
require 'db_connection.php';
require 'insert_user.php';
// IF USER LOGGED IN
if(isset($_SESSION['user_email'])){
header('Location: home.php');
exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sign Up - Confidænt</title>
<link rel="stylesheet" href="login.css" media="all" type="text/css">
</head>

<body>

<form action="" method="post">
    <div id="login">
        <div class="login-card">
            <div class="card-title">
            <h1>Signup</h1>
            </div>
      
          <div class="content">
            
              <input id="email" type="text" minlength="5" name="username" title="email" placeholder="Full name" required autofocus>
              <input id="email" type="email" name="user_email" title="email" placeholder="Email" required autofocus>
              <input id="password" type="password" name="user_password" title="password" placeholder="Password" required>
              <input id="password" type="password" name="confirm_password" title="password" placeholder="Confirm password" required>
                <a class="btn btn-link level-right" href="index.php">Have an account? Login</a>
              </div>
      
              <button type="submit" class="btn btn-primary">Signup</button>
            </div>
          </div>
        </div>
<?php
if(isset($success_message)){
echo '<div class="success_message">'.$success_message.'</div>'; 
}
if(isset($error_message)){
echo '<div class="error_message">'.$error_message.'</div>'; 
}
?>
<div class="container" style="background-color:#000000">
<a href="index.php"><button type="button" class="Regbtn">Login</button></a>
</form>
</body></html>