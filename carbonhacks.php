<?php
// the timezone is set so that the time displayed for when each carbon hack posted is correct
    date_default_timezone_set('Europe/London');
// this includes the dbh.inc.php file to this webpage which stores all the credientals for the database needed for the comment section and ensures this webpage is connected to the database
    include 'dbh.inc.php';
// this includes the comments.inc.php file to this webpage which has all the php functions needed for the comment section to work
    include 'comments.inc.php';
// this includes the logoutbtn.php file onto this webpage which has the logout button on it
include 'logoutbtn.php';
// this includes the profilebtn.php file onto this webpage which has the profile button on it
include 'profilebtn.php';
/// this allows me to specify that these buttons should only be displayed when the user is logged in
    
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">

    <!-- Stylesheet Linked -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- title for the browser tab -->
       <title>Genesis</title>
    
    <!-- J-Query cdn linked as it is needed for the JavaScript functions -->
    <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
     
<script>

$(document).ready(function() {

 $('#carbonhacks').hide(); //Initially form wil be hidden.
$('#closebtn').hide();
    
  $('#carbonhackbtn').click(function() {
      // Form shows on button click
   $('#carbonhacks').show();
      // button with id closebtn will be visible
      $('#closebtn').show();

   });
    $('#closebtn').click(function() {
        $('#carbonhacks').hide(); //when button with id carbon hacks is clicked the form will then be hidden
    });
 });
    
    </script>
            
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
<!-- navigation bar using HTML unordered list feature -->
<ul>
  <li><a href="index.php">HOME</a></li>
  <li><a href="quizzer/index.php">CALCULATOR</a></li>
  <li><a class="active" href="carbonhacks.php">CARBON HACKS</a></li>
    <li><a href="advice.php">ADVICE</a></li>
 
</ul>

<br><br><br>



<br>
    


<div class="carbonhacksform" id="carbonhacksform">
    <button class="carbonhackbtn" id="carbonhackbtn">Add a Carbon Hack</button><br>
<?php   
 // this comment section was created using the following YouTube tutorial https://www.youtube.com/watch?v=kWOuUkLtQZw
 // setComments function specified and explained in comments.inc.php file
// this is the form for adding a comment
echo "<form method='POST' class='carbonhacks' id='carbonhacks' action='".setComments($conn)."'>
    <input type='hidden' name='uid'>
    <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
    <textarea name='message'></textarea>
    <br>
    <button type='submit' name='commentSubmit'>Comment</button>
    <button id='closebtn' class='closebtn'>Close</button>
                         
</form>";
    
//input type uid will be hidden, will display anonymous for users not signed in
//input for date will be hidden as it will be automatically displayed based on the date and time user posted the carbon hack, date and time format also specified.
//getComments is specified and explained in comments.inc.php file
//getComments displays all of the comments that have been added
getComments($conn);
?>
     <p>  Copyright &copy; 2020, Genesis </p>
    </div>
 
</body>

    </html>