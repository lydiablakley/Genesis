<?php
//this will start the database session that is needed for the user to login
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  
    
     <!-- style for the navigation bar, taken from https://www.w3schools.com/css/css_navbar.asp -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- title for browser tab -->
     <title>Genesis</title>
    
 
    
    </head>

<body>

    <header>
<div class="login">
    <!-- I followed this YouTube tutorial to create the login and create an account system https://www.youtube.com/watch?v=LC9GaXkdxF8 -->
          <?php 
            if (isset($_SESSION['userId'])) {
                // if the userID session is in progress then the logout button must be present, this button will take the user to the logout.inc.php file which ends the session specified at the top of this document, logging the user out of the website.
        echo '<form action="includes/logout.inc.php" action="post">
          <button type="submit" name="logout-submit" class="logoutbtn" id="logoutbtn">LOGOUT</button>
          
          </form>';
    }
    
    else {
        // if the userID session is not in progress then the login form but me displayed.
        // the forgot your password feature was created using this YouTube tutorial https://www.youtube.com/watch?v=wUkKCMEYj9M 
        echo "<form action='includes/login.inc.php' method='post' class='loginform' id='loginform'>
            <input type='text' name='mailuid' placeholder='Username/E-mail...'><br><br>
            <input type='password' name='pwd' placeholder='Password...'><br><br>
            <button type='submit' name='login-submit'>Login</button><br>
            <a href='resetpassword.php'>Forgot your password?</a><br><br>
            <a href='signup.php'>Dont have an account? Sign up here!</a>
        </form>";
             
    }
          ?>
        </div>
        
<!-- login form styled -->        
<style>
.login {
    display: block;
    text-align: center;
}
.loginform {
    display: inline-block;
    margin-left: auto;
    margin-right: auto;
    text-align: left;
}
</style>
    </header>
    </body>
</html>
      

      

  