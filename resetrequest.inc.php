<?php
// this file was taken from the following YouTube tutorial https://www.youtube.com/watch?v=wUkKCMEYj9M
if (isset($_POST["resetrequestsubmit"])) {
    

    // token created, must be encrypted
    // random bytes will generate the token and bin2hex will convert the bytes to a hexademical format
    // token used to authenticate correct user
    $selector = bin2hex(random_bytes(8));
    $token = random_bytes(32);
    
    $url = "http://localhost:8080/commentsection/createnewpassword.php?selector=" . $selector . "&validator=" . bin2hex($token);
    
    // setting password expiry date
    $expires = date("U") + 1800;
    // file connected to database
    require 'dbh.inc.php';
    
    $userEmail = $_POST["email"];
    
    
    $sql = "DELETE FROM pwdReset WHERE pwdEmailReset=?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Error!";
        exit();
    } else {
        // 1 s as there is only one string
        mysqli_stmt_bind_param($stmt, "s", $userEmail);
        mysqli_stmt_execute($stmt);
    }
    // sql error inserting new password crendentials into database
    $sql = "INSERT INTO pwdReset (pwdResetEmail, pwdResetSelector, pwdResetToken, pwdResetExpires) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Error!";
        exit();
    } 
    // encrypt passowrd
    else {
        $hashedToken = password_hash($token, PASSWORD_DEFAULT);
        //// 4 s stands for the 4 strings
        mysqli_stmt_bind_param($stmt, "ssss", $userEmail, $selector, $hashedToken, $expires);
        mysqli_stmt_execute($stmt);
    }
    
    mysqli_stmt_close($stmt);
    mysqli_close();
    
    // this is what the email will contain, cannot test as mail function not available on local host
    $to = $userEmail;
    
    $subject = 'Reset your password for Genesis';
    
    $message = '<p>Click this link to reset your password</p>';
    
    $message .= '<p>Password reset link: </br>';
    $message .= '<a href="' . $url . '">' . $url . '</a></p>';
    
    $headers = "From: Genesis <genesis@gmail.com>\r\n";
    $headers .= "Reply-To: genesis@gmail.com\r\n";
    $headers .= "Content-type: text/html\r\n";
    
    mail($to, $subject, $message, $headers);
    //once password is changed the user will see success in browser
    header("Location: ../resetpassword.php?reset=success");
    
} else {
    // if user didnt enter credentials correctly they will be redirected to the main.php webpage
    header("Location: ../main.php");
}

?>