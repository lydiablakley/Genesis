<?php
 // this comment section was created using the following YouTube tutorial https://www.youtube.com/watch?v=kWOuUkLtQZw
//conn is the database connection
function setComments($conn) {
if (isset($_POST['commentSubmit'])) {
    $uid = $_POST['uid'];
    $date = $_POST['date'];
    $message = $_POST['message'];
// the adds the users uid date and message into the correct fields    
// uid and date will be automated whereas the user will add their own message
    $sql = "INSERT INTO comments (uid, date, message) VALUES ('$uid', '$date', '$message')";
    $result = $conn->query($sql);
}
}

function getComments($conn) {
    // comments is the name of the database table where the uid date and message are stored
    $sql = "SELECT * FROM comments";
    $result = $conn->query($sql);
    // this fetches the results and will echo them out
    while ($row = $result->fetch_assoc()) {
            echo "<div class='comment-box'><p>";
            echo $row['uid']."<br>";
            echo $row['date']."<br>";
            echo nl2br($row['message']);
        //button to delete comments, this will delete them from webpage and database
            echo "</p>
            <form class='delete-form' method='POST' action='".deleteComments($conn)."'>
                <input type='hidden' name='cid' value='".$row['cid']."'>
                <button type='submit' name='commentDelete'>Delete</button>
            </form>
          
   
          </div>";
    
     
    }
  

}


function deleteComments($conn) {
    if (isset($_POST['commentDelete'])) {
        // this function deletes the cid that matches the cid of the comment, this will delete the entire comment
    $cid = $_POST['cid'];
    $sql = "DELETE FROM comments WHERE cid='$cid'";
    $result = $conn->query($sql);
        // once deleted the user will be taken back to the carbonhacks.php page and it will be refreshed with the comment deleted
    header("Location: carbonhacks.php");
        
}
}


?>
    