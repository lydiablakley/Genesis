<?php
// included so that this webpage can be connected to the database
include 'database.php';
?>

<?php 
// connection to database session started
session_start(); 
?>

<?php
// the following quiz was created using this YouTube tutorial https://www.youtube.com/watch?v=3zcXr46J6-U&t=1s
// current score is set at 0, will go up by 1 when correct_choice is selected
if(!isset($_SESSION['score'])){
    $_SESSION['score'] = 0;
}

if($_POST){
    $number = $_POST['number'];
    $selected_choice = $_POST['choice'];
    // next takes you to the next question, number +1
    $next = $number+1;
    // selecting from the questions table in the database
    $query = "SELECT * FROM questions";
    
    $results = $mysqli->query($query) or die ($mysqli->error.__LINE__);
    
    $total = $results->num_rows;

    $query = "SELECT * FROM choices
                WHERE question_number = $number AND is_correct = 1";
    
    $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
    
    $row = $result->fetch_assoc();
    
    // correct choice is found in the database with the number 1 issued to it
    $correct_choice = $row['id'];
    // if the correct choice specified in the database matches the selected choice then the 1 should be added to the score
    if($correct_choice == $selected_choice){
        
        $_SESSION['score']++;
    }
    
    if($number == $total) {
        // if the current question number matches the total number of questions then the user will be redirected to the final.php page
        header("Location: final.php");
        exit();
    } else {
        // if the current question number does not match the total  number of questions then the user will be directed to the next question
        header("Location: question.php?n=".$next);
    }
    
}

?>