<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" /> 
<!-- stylesheet linked -->
    <link rel="stylesheet" href="style.css" type="text/css" />
    <!-- title for browser tab -->
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
<!-- navigation bar created using HTML unordered list feature -->
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
    <!-- this create new password feature was create using this YouTube tutorial https://www.youtube.com/watch?v=wUkKCMEYj9M -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <div class="registertext">
   <h1>Reset your password</h1>
        <p>An email will be sent to you with instructions on how to reset your password.</p>
        <!-- submit button will take the user to the resetrequest.inc.php file -->
        <form action="includes/resetrequest.inc.php" method="post">
            <input type="text" name="email" placeholder="Enter your email address">
            <button type="submit" name="resetrequestsubmit">Receive new password by email</button>
        </form>
        
        <!-- if the reset function was success then the message check your email will show up
Note: as this is only tested on a local host it will show an error message as the mail function is only available on an online host -->
        
        
        <?php
        if (isset($_GET["reset"])) {
            if ($_GET["reset"] == "success") {
                echo '<p class="signupsuccess">Check your email!</p>';
            }
        }
        ?>

   
    </div>
</main>
    </container>
    </body>
</html>

