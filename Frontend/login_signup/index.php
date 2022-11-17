<?php
session_start();
require 'db_connection.php';
require 'login.php';
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
<title>Login - Confidænt</title>
<link rel="stylesheet" href="login.css" media="all" type="text/css">
</head>

<body>
<form action="" method="post">
    <div id="login">
      <div class="login-card">
      
        <div class="card-title">
          <h1>Login</h1>
        </div>
      
        <div class="content">
            <input id="email" type="email" name="user_email" title="email" placeholder="Email" required autofocus>
            <input id="password" type="password" name="user_password" title="password" placeholder="Password" required>
            <a class="btn btn-link level-right" href="signup.php">Don't have an account? Sign Up</a>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
           
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
<div class="container" style="background-color:#f1f1f1">
<a href="signup.php"><button type="button" class="Regbtn">Create an account</button></a>
</div>
</form>
</body></html>
