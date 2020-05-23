<!DOCTYPE html>
<html>
    <head> 
        <!-- stylesheet linked -->
        <link rel="stylesheet" type="text/css" href="style.css">
        <!-- title for browser tab -->
         <title>Genesis</title>
        
    <!-- navigation bar styled, this is taken from https://www.w3schools.com/css/css_navbar.asp -->
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}
</style>
</head>
<body>
<!-- navigation bar using the HTML unordered list feature -->
<ul>
  <li><a href="index.php">HOME</a></li>
  <li><a href="quizzer/index.php">CALCULATOR</a></li>
  <li><a href="carbonhacks.php">CARBON HACKS</a></li>
<li><a href="advice.php">ADVICE</a></li>
  <li><a class="active"href="profile.php">PROFILE</a></li>
</ul>
    <br><br>
    
 <!-- includes the header.php file into this webpage which contains all the php functions for the login feature, this is needed to display the credientals from the database onto the user profile --> 
<?php
require "header.php";
?>


    <div class="userprofile" id="userprofile">
        
        
        
<?php
   
 // this adds the dbh.inc.php file to this webpage which is where the database credientals are stored and the website is linked to the database  
require 'dbh.inc.php';
 echo 'Username:  ';
        // this echoes out the userUid which is stored in the database
  echo 
     $_SESSION['userUid']
  
?><br>
      <?php  
      echo 'Email Address:  ';
        // this echoes out the userMail which is stored in the database
 echo $_SESSION['userMail']
      ?>
    </div>

    </body>
</html>