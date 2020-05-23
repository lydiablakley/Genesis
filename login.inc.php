 <link rel="stylesheet" type="text/css" href="../style.css">
<?php
// the following login system was created using this YouTube tutorial https://www.youtube.com/watch?v=LC9GaXkdxF8
if (isset($_POST['login-submit'])) {
 // adding database connection to this webpage  
    require 'dbh.inc.php';
    //mailuid and pwd stored in database 
    $mailuid = $_POST['mailuid'];
    $password = $_POST['pwd'];
    
    //validation checks
    // if the mailuid or password is empty the user will be redirected to the main.php webpage with the error empty fields
    if (empty($mailuid) || empty($password)) {
        header("Location: ../main.php?error=emptyfields");
   
        exit();
        
    }
    else {
        $sql = "SELECT * FROM users WHERE uidUsers=? OR emailUsers=?;";
        $stmt = mysqli_stmt_init($conn);
        // if there is an error from the database then the error message will just say Error!
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../main.php?error=sqlerror");
           
            exit();
        }
        else {
            
            mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
                // if password does not match encrypted one in database then wrong password message will appear
                $pwdCheck = password_verify($password, $row['pwdUsers']);
                if ($pwdCheck == false) {
                    header("Location: ../main.php?error=wrongpwd");
              
                    exit();
                    
                }
                else if($pwdCheck == true) {
                    session_start();
                    // if all fields are entered correctly then signup will be successful
                    $_SESSION['userId'] = $row['idUsers'];
                    $_SESSION['userUid'] = $row['uidUsers'];
                    $_SESSION['userMail'] = $row['emailUsers'];
                    
                    header("Location: ../main.php?login=success");
                }
                // if signup isnt successful then wrong password or no user error messages will appear
                else {
                    header("Location: ../main.php?error=wrongpwd");
      
                    exit();
                }
                
            }
             else {
                 header("Location: ../main.php?error=nouser");
              
                 exit();
             }   
        }
    }
    
}
else {
    header("Location: ../main.php");
    exit();
}


?>