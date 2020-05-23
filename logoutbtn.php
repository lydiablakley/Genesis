<?php
    session_start();
?>

  <?php 
            if (isset($_SESSION['userId'])) {
                // the logout button will only be displayed when the userId session is in progress
                // when button is submitted the user will be redirected to the logout.inc.php file
        echo '<form action="../includes/logout.inc.php" action="post">
          <button type="submit" name="logout-submit" class="logoutbtn" id="logoutbtn">LOGOUT</button>
          
          </form>';
    }
    
    else {
        
    }
          ?>