<?php include 
'database.php';
?>
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
    <meta charset="utf-8" /> 
<!-- Stylesheet Linked -->
    <link rel="stylesheet" href="css/style.css" type="text/css" />
      
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
<!-- navigation bar using HTML unordered list feature -->
<ul class="nav">
  <li class="nav"><a  href="../index.php">HOME</a></li>
  <li class="nav"><a class="active" href="quizzer/index.php">CALCULATOR</a></li>
  <li class="nav"><a href="../carbonhacks.php">CARBON HACKS</a></li>
<li class="nav"><a href="../advice.php">ADVICE</a></li>
  <li class="nav"><a href="../profile.php">PROFILE</a></li>
</ul>





   <br><br>
       
       
    
    <main>
    <div class="container">
        <h2>You're Finished!</h2>
        <p>Congrats! You have completed the calculator</p>
        <!-- I created this quiz using this YouTube tutorial  https://www.youtube.com/watch?v=3zcXr46J6-U -->
        <!-- the score is can be found and explained in the process.php page -->
        <p>Final Score: <?php echo $_SESSION['score']; ?><br><br>
            <?php 
            // if the score is more than or equal to 7 AND less than or equal to 10 the user will be awarded a gold badge
    if($_SESSION['score']>=7  && $_SESSION['score'] <=10 ){echo 'Well done you have been awarded a GOLD BADGE. You are doing very well to protect the environment, please click below to see what you could do better';echo  ' <br><br><a href="../gold.php">Advice</a>'; };
?>
         
                 
             <?php
            // if the score is more than or equal to 5 AND less than or equal to 6 the user will be awarded a silver badge 
    if($_SESSION['score']>=5 && $_SESSION['score'] <=6){echo 'Well done you are been awarded a SILVER BADGE. You are doing well to protect the environment however there is room for improvement, please click below to see what you could do better';echo  ' <a href="../silver.php">Advice</a>'; };
?>
                        <?php
            // if the score is more than or equal to 3 AND less than or equal to 4 the user will be awarded a bronze badge 
    if($_SESSION['score']>=3 && $_SESSION['score'] <=4){echo 'Well done you are been awarded a BRONZE BADGE. There is lots of room for improvement to protect the environment, please click below to see what you could do better';echo  '<br><br> <a href="../bronze.php">Advice</a>'; };
?>   
     
   
            <?php  
            // if the score is less than or equal to 2 the user will not be awarded abadge 
    if($_SESSION['score']<=2){echo 'Unfortunately you have not been awarded a badge. You could do more to protect the environment, please click below to see what you could do better';echo  ' <a href="../nobadge.php">Advice</a>'; };
?>
         
   </p>
        <!-- this link will take you back to the first page of the question.php which is question 1 where the user can retry the calculator -->
        <a href="question.php?n=1" class="start">Retry Calculator</a>
        </div>
    </main>

    <div class="container">
        <p>  Copyright &copy; 2020, Genesis </p>
        </div>
    
   

</body>

</html>
<!-- this destroys the session at the end of the calculator, it means if the user were to take the calculator again then all their previous scores will be reset -->
