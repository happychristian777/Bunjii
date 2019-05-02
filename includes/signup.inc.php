<?php
if(isset($_POST['signup-submit'])){

    require 'dbh.inc.php';

    $username = $_POST['uid'];
    $email = $_POST['mail'];
    $password = $_POST['pwd'];
    $passwordRepeat = $_POST['pwd-repeat'];
    // Error check for empty fields
    if(empty($username) || empty($email) || empty($password) || empty($passwordRepeat)){
        header("Location: ../signup.php?error=emptyfields&uid=".$username."&mail=".$email);
        exit();
    }
    // Error check for invalid email and username
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)){
    header("Location: ../signup.php?error=invalidmailuid&uid");
    exit();
    }
    // Error check for invalid email
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location: ../signup.php?error=invalidmail&uid=".$username);
        exit();
    }
    // Error check for invalid password
    else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        header("Location: ../signup.php?error=invaliduid&uid=".$email);
        exit();
    }
    // Error check for dissimilar password and repeat password
    else if($password !== @$passwordRepeat) {
        header("Location: ../signup.php?error=passwordcheckuid=".$username."&mail".$email);
        exit();
    }
    // Error check for existing usernames
    else{
        $sql = "SELECT uidUsers FROM users WHERE uidUsers=?";
        $stmt = mysqli_stmt_init($conn);
        //Error check for sql connection
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../signup.php?error=sqlerror=");
            exit();
        }
        // Checking for similar usernames
        else{
            mysqli_stmt_bind_param($stmt,"s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if ($resultCheck > 0){
                header("Location: ../signup.php?error=usertaken&mail=".$email);
                exit();
            }
            // Inserting valid values into the user table
            else {
                $sql = "INSERT INTO user(uidUsers, emailUsers, pwdUsers) VALUES(?,?,?)";
                $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt, $sql)){
                    header("Location: ../signup.php?error=usertaken&mail=".$email);
                    exit();
                }
                else {
                    $hashedPwd = password_hash($password, PASSWORD_DEFAULT)
                    mysqli_stmt_bind_param($stmt,"sss", $username, $email, $hashedPwd);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../signup.php?signup=success");
                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
//Error message for URL access
else{
    header("Location: ../signup.php");
    exit();
}