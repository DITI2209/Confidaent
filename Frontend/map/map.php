<?php
session_start();
require 'db_connection.php';
// CHECK USER IF LOGGED IN
if(isset($_SESSION['user_email']) && !empty($_SESSION['user_email'])){

$user_email = $_SESSION['user_email'];
$get_user_data = mysqli_query($db_connection, "SELECT * FROM `users` WHERE user_email = '$user_email'");
$userData =  mysqli_fetch_assoc($get_user_data);

}else{
header('Location: logout.php');
exit;
}
?>
<!DOCTYPE html>
<html lang="">
<head>
<title>MAP FILE</title>
  <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.10/semantic.min.css">
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <link rel="apple-touch-icon" sizes="180x180" href="public\images\apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="public\images\favicon-32x32.png">
  <link rel="icson" type="image/png" sizes="16x16" href="public\images\favicon-16x16.png">
  <link rel="manifest" href="public\images\site.webmanifest">
  <link rel = 'stylesheet' href = "map.css"> 
  <script src="//code.jquery.com/jquery-3.4.1.js"></script>
  <script src="/socket.io/socket.io.js"></script>
  <meta charset="utf-8">
  
</head>

<body>
<!-- hamburger menu -->
<div class="menu-wrap">
    <input type="checkbox" class="toggler">
    <div class="hamburger"><div></div></div>
    <div class="menu">
      <div>
        <div>
          <ul>
            <!-- link these -->
            <li><a href="homepage.html">Home</a></li> //link
            <li><a href="location_index.html">Get Location</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  
  

  <header class="text-white body-font bg-black">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
      <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center">


        <!-- <form action="/text" method="POST"> -->
          <!-- <button  type="submit" id="shareLoc"> -->
            <!-- link -->
            <br><br><br><br><br><br>
            <img onclick="window.location.href='location_index.html'" src="77256-radar.gif" width="70px" height="70px" class="mr-5 hover:text-gray-900">
            </a>
          </button>
        </form>

    </div>
  </header>
  <input  id="origin-input" class="controls" type="text" placeholder="Enter the start location">

  <input id="destination-input" class="controls" type="text" placeholder="Enter the destination location">

  <div  id="mode-selector" class="controls">
    <input type="radio" name="type" id="changemode-walking" checked="checked">
    <label for="changemode-walking"> Walk </label> 

    <input  type="radio" name="type" id="changemode-transit">
    <label for="changemode-transit"> Transit </label> 

    <input  type="radio" name="type" id="changemode-driving">
    <label for="changemode-driving"> Drive </label>
  </div>

  <div id="map" class="ui container"></div>
  <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDYix08CvzofgSO_7bJr3yr8VLqaEipyhI&libraries=places"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  
  <script src="map.js"></script>
  <script src="js/index.js"></script>
  <script src="js/location.js"></script>

</div>
</body>
</html>
