<?php
if (isset($_POST['signup-submit'])) {
    // connection to database
    require 'dbh.inc.php';
    // the following signup page was taken from this YouTube tutorial https://www.youtube.com/watch?v=LC9GaXkdxF8
    $username = $_POST['uid'];
    $email = $_POST['mail'];
    $password = $_POST['pwd'];
    $passwordRepeat = $_POST['pwd-repeat'];
    // VALIDATION CHECKS
    // checking if any fields are empty
    if (empty($username) || empty($email) || empty($password) || empty($passwordRepeat)) {
    
        header("Location: ../signup.php?error=emptyfields&uid=".$username."&mail=".$email);
        exit();
    }
    // checking if email address is correct format
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../signup.php?error=invalidmailuid");
        exit(); 
    }
        // checking if email address matches the uid
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       header("Location: ../signup.php?error=invalidmail&uid=".$username);
        exit(); 
    }
    // checking is user name is correct format
    else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
       header("Location: ../signup.php?error=invaliduidl&mail=".$email);
        exit(); 
    }
    // checking if password matches the repeated password
    else if ($password !== $passwordRepeat) {
         header("Location: ../signup.php?error=passwordcheck&uid=".$username."&mail=".$email);
        exit(); 
    }
    
    else {
        // database check for uidUsers
        $sql = "SELECT uidUsers FROM users WHERE uidUsers=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../signup.php?error=sqlerror");
            exit();
        }
        else {
            // checking if username is unique or already exists in the database
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if ($resultCheck > 0) {
                header("Location: ../signup.php?error=usertaken&mail=".$email);
                exit();
            }
            else {
                // error message for any errors inserting into the database
                $sql = "INSERT INTO users (uidUsers, emailUsers, pwdUsers) VALUES (?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../signup.php?error=sqlerror");
                    exit();
                }
            else {
                // if the signup is successful then the password will be encrytped /password_hash/ to store in the database
                $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
                
                mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd);
                mysqli_stmt_execute($stmt);
                header("Location: ../signup.php?signup=success");
                exit();
            }
            }
        }
        
    }
    // close connection to database
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    
}

else {
    //redirect user to the signup.php webpage
    header("Location: ../signup.php");
    exit();
}
?>