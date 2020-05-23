<?php
include 'database.php';

// this includes the logoutbtn.php file onto this webpage which has the logout button on it
include 'logoutbtn.php';
// this includes the profilebtn.php file onto this webpage which has the profile button on it
include 'profilebtn.php';
/// this allows me to specify that these buttons should only be displayed when the user is logged in
?>
      
<?php

$query = "SELECT * FROM questions";

$results = $mysqli->query($query) or die($mysqli->error.__LINE__);

// total is calculating the number of questions there are
$total = $results->num_rows;

?>

   
    

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" /> 
    <title>Genesis</title>
    <!-- 2 css pages defined, one specific to the quizzer folder and the general stylesheet for all webpages in this project -->
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="stylesheet" href="../style.css" type="text/css" />
    
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

<ul class="nav">
  <li class="nav"><a  href="../index.php">HOME</a></li>
  <li class="nav"><a class="active" href="index.php">CALCULATOR</a></li>
  <li class="nav"><a href="../carbonhacks.php">CARBON HACKS</a></li>
<li class="nav"><a href="../advice.php">ADVICE</a></li>

</ul>


       <div class="container">
<br><br>
       
       </div>
    

    
    <main>
        <!-- this container is responsive and will adjust to changes in the webpage size -->
    <div class="container">
        <h2>How well are you protecting our Earth?</h2>
        <p>At the end of this calculator you will recieve a badge classification and advice tailored to you.</p>
        
        <ul>
        <li class="list"><strong>Number of Questions: </strong>
    <!-- this will echo out the total amount of questions, $total is defined in the php statement at the top -->
            <?php 
            echo $total; 
            ?>
            </li>
    <!-- type of quiz defined -->
        <li class="list"><strong>Type: </strong>Multiple Choice</li>
            
    <!-- this calculates how long the quiz will take by multiplying the total amount of questions /$total/ by 0.5 -->
        <li class="list"><strong>Estimated Time: </strong><?php echo $total * .5; ?> Minutes</li>
            
        </ul>
        
    <!-- this link takes you to the question.php page, n=1 defines the first qurstion to be displayed so that each question will have its own page -->
        <a href="question.php?n=1" class="start">Start Calculator</a></div>
    </main>

    <!-- container specified in the CSS to adjust the positon of the footer, this is also responsive -->
        <div class="container">
        <p> Copyright &copy; 2020, Genesis </p>
        </div>
    

</body>

</html>