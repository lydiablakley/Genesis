<?php
// this includes the logoutbtn.php file onto this webpage which has the logout button on it
include 'logoutbtn.php';
// this includes the profilebtn.php file onto this webpage which has the profile button on it
include 'profilebtn.php';
/// this allows me to specify that these buttons should only be displayed when the user is logged in
?>
      
<!DOCTYPE html>
<html>
    <head> 
        <!-- Stylesheet Linked -->
        <link rel="stylesheet" type="text/css" href="style.css">
        <!-- title for browser tab -->
         <title>Genesis</title>
         <!-- style for the navigation bar, taken from https://www.w3schools.com/css/css_navbar.asp -->
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
    
<!-- navigation bar using HTML unordered list feature -->
<ul>
  <li><a class="active" href="index.php">HOME</a></li>
  <li><a href="quizzer/index.php">CALCULATOR</a></li>
  <li><a href="carbonhacks.php">CARBON HACKS</a></li>
<li><a href="advice.php">ADVICE</a></li>

</ul>
    <br><br>
 <!-- includes the header.php file into this webpage which contains all the php functions for the login feature --> 
<?php
require "header.php";
?>
    
    <br>
  <main>
     <!-- I followed this YouTube tutorial for the login and create an account system https://www.youtube.com/watch?v=LC9GaXkdxF8 -->
     <?php
      /// if the userID session is logged in then the following message will be echoed out.
    if (isset($_SESSION['userId'])) {
        echo '<p>You are logged in!</p>';
    }
    
  
?>
  <?php 
    /// if the user id session is logged in then the profile button must be displayed.
    /// this button will take the user to the profile.php page as specified in the form action that is being echoed out.
        if (isset($_SESSION['userId'])) {
        echo '<form action="profile.php" action="post">
          <button type="submit" name="profile-submit" class="profilebtn" id="profilebtn">PROFILE</button>
          
          </form>';
    }
    
  
          ?>
   
</main>
</body>
</html>
    

