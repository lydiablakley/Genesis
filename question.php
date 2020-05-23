<?php 
// included so that this webpage can be connected to the database
include 'database.php';
// this includes the logoutbtn.php file onto this webpage which has the logout button on it
include 'logoutbtn.php';
// this includes the profilebtn.php file onto this webpage which has the profile button on it
include 'profilebtn.php';
/// this allows me to specify that these buttons should only be displayed when the user is logged in
?>
    
<?php
// the following quiz was created using this YouTube tutorial https://www.youtube.com/watch?v=3zcXr46J6-U&t=1s
$number = (int) $_GET['n'];

// sections from questions table in database
$query = "SELECT * FROM questions";

$results = $mysqli->query($query) or die ($mysqli->error.__LINE__);

$total = $results->num_rows;

// question_number is the current question the user is on
    $query = "SELECT * FROM questions
            WHERE question_number = $number";

// GET QUESTION

    $result = $mysqli->query($query) or die($mysqli->error.__LINE__);

    $question = $result->fetch_assoc();
    
// GET CHOICES


    $query = "SELECT * FROM choices
    WHERE question_number = $number";


    
    $choices = $mysqli->query($query) or die($mysqli->error.__LINE__);
    

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" /> 
    <!-- stylesheet linked -->
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
  <li class="nav"><a  href="home.php">HOME</a></li>
  <li class="nav"><a class="active" href="quizzer/index.php">CALCULATOR</a></li>
  <li class="nav"><a href="index.php">CARBON HACKS</a></li>
<li class="nav"><a href="advice.php">ADVICE</a></li>
 
</ul>




 
       <div class="container">
<br><br>
       
       </div>
    

    
    <main>
    <div class="container">
        <!-- current question number will be echoed out, question_number is the current question the user is on -->
        <!-- total number of questions will be echoed out -->
        <div class="current">Question <?php echo $question['question_number']; ?> of <?php echo $total; ?></div>
        <p class="question">
      <?php
            // question text is a column from the databse that will output the questions
          echo $question['text'];  
            ?>
        </p>
        
        
        <form method="post" action="process.php">
            <ul class="choices">
                <?php while($row = $choices->fetch_assoc()): ?>
                <!-- radio buttons for each choice, $row 'text' specifes a column in the data that is to be outputted, the users choice will be stored by the id -->
                <li class="list"><input name="choice" type="radio" value="<?php echo $row['id']; ?>" /><?php echo $row['text']; ?></li>
                <!-- close statement -->
                <?php endwhile; ?>
           
            </ul>
            <input type="submit" value="Submit" />
            <!-- submit the choice the user has picked -->
            <input type="hidden" name="number" value="<?php echo $number; ?>" />
        </form>
        </div>
    </main>

    <div class="container">
        <p>  Copyright &copy; 2020, Genesis </p>
        </div>
    

</body>

</html>