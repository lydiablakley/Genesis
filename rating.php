<?php 
// link to database, seperate database for rating system
$db_host = 'localhost';
$db_name = 'ratingSystem';
$db_user = 'root';
$db_pass = '';
$conn = new mysqli ($db_host, $db_user, $db_pass, $db_name);

// this rating system was taken from the following YouTube tutorial https://www.youtube.com/watch?v=i04U0C-v_to
// this php function will receive the average rating for the star rating
if (isset($_POST['save'])) {
// defining the uID and ratedIndex
    $uID = $conn->real_escape_string($_POST['uID']);
    $ratedIndex = $conn->real_escape_string($_POST['ratedIndex']);
    $ratedIndex++;
    
    if (!$uID) {
    $conn->query("INSERT INTO stars (rateIndex) VALUES ('$ratedIndex')");
        // retriving the id field from the ratingSystem database, this will help find how many people have rated 
    $sql= $conn->query("SELECT id FROM stars ORDER BY id DESC LIMIT 1");
    $uData = $sql -> fetch_assoc();
    $uID = $uData['id'];
    
} else
    $conn->query("UPDATE stars SET ratedIndex='$ratedIndex' WHERE id='$uID'");
    
    exit(json_encode(array('id' => $uID)));
}

$sql = $conn->query("SELECT id FROM stars");
// numR finds out how many ratings have taken place
$numR = $sql->num_rows;
    
$sql = $conn->query("SELECT SUM(rateIndex) AS total FROM stars");

$rData = $sql->fetch_array();

// total works out all of the star ratings 
$total = $rData['total'];
// this works out the average by dividing the total of all the ratings and the amount of ratings there were.
$avg = $total / $numR;
?>


<!doctype html>
<html>
<head>
    <!-- font awesome used for stars -->
    <script src="https://kit.fontawesome.com/801c332ab2.js" crossorigin="anonymous"></script>
    <!-- jQuery cdn needed for javascript functions -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
 
    </head>
<body>
    <!-- stars taken from fontawesome.com -->
    <!-- stars have been resized to fit with my website -->
    <i class="fa fa-star fa" data-index="0" style="font-size:24px"></i>
       <i class="fa fa-star fa" data-index="1" style="font-size:24px"></i>
       <i class="fa fa-star fa" data-index="2" style="font-size:24px"></i>
       <i class="fa fa-star fa" data-index="3" style="font-size:24px"></i>
       <i class="fa fa-star fa" data-index="4" style="font-size:24px"></i>
    <br><br>
    
    <?php
    echo round($avg, 2);
    ?>
    
       <script>
           // rated index currently sits at -1 
           var ratedIndex = -1, uID = 0;
           
    $(document).ready(function() {
        resetStarColors();
        // when amount of stars are selected it will be stored in the users localStorage so when they revisit the webpage they can see which star rating they choose, but they can also change it.
        if (localStorage.getItem('ratedIndex') != null) {
            setStars(parseInt(localStorage.getItem('ratedIndex')));
            uID = localStorage.getItem('uID');
            }
        // when star is clicked the ratedIndex will be sent to the database with the number of the star rating from 1-5
        
    $('.fa-star').on('click', function() {
        ratedIndex = parseInt($(this).data('index'));
        localStorage.setItem('ratedIndex', ratedIndex);
        saveToTheDB();
    });    
        
        // when mouse is hovering over stars the colour will change from white to green
      $('.fa-star').mouseover(function(){
        resetStarColors();
          
          var currentIndex = parseInt($(this).data('index'));
          
        setStars(currentIndex);
      });
        // when mouse leaves stars the colour will change from green to white
        $('.fa-star').mouseleave(function(){
            resetStarColors();
            
            if (ratedIndex != -1)
                       setStars(ratedIndex);
        });
    });
           // AJAX used to post the uID of the user and their rating to the database
           
           function saveToTheDB(){
$.ajax({
    url: "rating.php",
    method: "POST",
    dataType: "json",
    data: {
        save: 1,
        uID: uID,
        ratedIndex: ratedIndex
    }, success:function (r) {
        uID = r.Uid;
        localStorage.setItem('uID', uID);
        
    }
});
           }
           // defines that each stars rating will go up by one
           function setStars(max) {
                for (var i=0; i <= max; i++)
              $('.fa-star:eq('+i+')').css('color','green');
           }
           
           function resetStarColors(){
               $('.fa-star').css('color', 'black');
           }
    </script>
    </body></html>