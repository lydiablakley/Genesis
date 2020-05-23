<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" /> 
<!-- stylesheet linked -->
    <link rel="stylesheet" href="style.css" type="text/css" />
    <!-- title for the browser tab -->
     <title>Genesis</title>
   <!-- style for the navigation bar, taken from https://www.w3schools.com/css/css_navbar.asp -->
    <style>
ul.nav {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li.nav {
  float: left;
}

li.nav a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li.nav a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}
</style>
</head>
<body>
<!-- navigation bar using HTML unordered list feature -->
<ul class="nav">
  <li class="nav"><a  href="index.php">HOME</a></li>
  <li class="nav"><a href="quizzer/index.php">CALCULATOR</a></li>
  <li class="nav"><a href="../carbonhacks.php">CARBON HACKS</a></li>
<li class="nav"><a href="../advice.php">ADVICE</a></li>
  <li class="nav"><a href="../profile.php">PROFILE</a></li>
</ul>
<br><br>
   <container> 
<main>
    <link rel="stylesheet" type="text/css" href="style.css">
    <div class="registertext">
   <!-- I made this create new password feature using the following YouTube tutorial https://www.youtube.com/watch?v=wUkKCMEYj9M
    Note: This feature won't work on local host as it requires the mail function which will only work on a paid host server -->
    
        
        <?php
            $selector = $_GET["selector"];
            $validator = $_GET["validator"];
        // validation checks
        // if the selector and validator are empty which should contain the new password then an error message will be outputted
            if (empty($selector) || empty($validator)) {
                echo "Error!";
            } else {
        // ctype_xdigit used to check each digit of the new password to see if it meets the criteria, if they are not hexadecimal digits then they will return FALSE
                if (ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false) {
                    ?>
        
        <!-- form to enter the details for new password -->
        <form action="includes/resetpassword.inc.php" method="post">
        <input type="hidden" name="selector" value="<?php echo $selector ?>;">
        <input type="hidden" name="validator" value="<?php echo $validator ?>;">
        <input type="password" name="pwd" placeholder="Enter your new password">
        <input type="password" name="pwd-repeat" placeholder="Repeat your new password">
        <button type="submit"  name="resetpasswordsubmit">Reset Password</button>
               
        </form>
        
     
    </div>
</main>
    </container>
    </body>
</html>

