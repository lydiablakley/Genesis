 <?php 
// the profile.php button will only be displayed when the userId session is in progress
            if (isset($_SESSION['userId'])) {
// when the profile  button is clicked the user will be taken to the profile.php webpage
        echo '<form action="../profile.php" action="post">
          <button type="submit" name="profile-submit" class="profilebtn" id="profilebtn">PROFILE</button>
          
          </form>';
    }
    
   
          ?>