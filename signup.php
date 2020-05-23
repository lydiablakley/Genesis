<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" /> 
 <title>Genesis</title>
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
  <li class="nav"><a href="carbonhacks.php">CARBON HACKS</a></li>
<li class="nav"><a href="advice.php">ADVICE</a></li>
  <li class="nav"><a href="profile.php">PROFILE</a></li>
</ul>
<br><br>
   <container> 
<main>
 <!-- this signup section was creating using this YouTube tutorial https://www.youtube.com/watch?v=LC9GaXkdxF8 -->
    <div class="registertext">
   <h1>Create an account</h1>
        
    </div>
    <?php
    // validation for the signup form
    if (isset($_GET['error'])) {
        // checking for empty fields
        if ($_GET['error'] == "emptyfields") {
            echo '<p>Fill in all fields!</p>';
        }
        // checking for a valid email address and username
        else if ($_GET['error'] == "invaliduidemail") {
            echo '<p>Invalid username and e-mail!</p>';
        }
        // checking for valid username 
         else if ($_GET['error'] == "invaliduid") {
            echo '<p>Invalid username!</p>';
        }
        // checking for valid email address
         else if ($_GET['error'] == "invalidmail") {
            echo '<p>Invalid e-mail!</p>';
        }
        // chefcking if password matches the one abovex
         else if ($_GET['error'] == "passwordcheck") {
            echo '<p>Your passwords do not match!</p>';
        }
        // checking if username is already taken
         else if ($_GET['error'] == "usertaken") {
            echo '<p>Username is already taken!</p>';
        }
    }
    // if all fields have been entered successful then signup successful message will appear in browser -->
    else if ($_GET["signup"] == "success") {
        echo '<p>Signup successful!</p>';
    }
    ?>
<!-- HTML form for the user to signup -->
    <div class="signup">
    <form action="includes/signup.inc.php" method="post" class="signupform">
    <input type="text" name="uid" placeholder="Username"><br><br>
    <input type="text" name="mail" placeholder="E-mail"><br><br>
    <input type="password" name="pwd" placeholder="Password"><br><br>
    <input type="password" name="pwd-repeat" placeholder="Repeat Password"><br><br>
    <button type="submit" name="signup-submit">Signup</button>
    </form>
        
    </div>
</main>
    </container>
    </body>
</html>

