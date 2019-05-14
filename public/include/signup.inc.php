<?php

    require_once ("../../private/initialize.php");
    require_once ("../../private/database.php");

    if(isset($_POST['submit'])) {

        global $conn;

        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $cPassword = mysqli_real_escape_string($conn, $_POST['cPassword']);

        if (empty($name) || empty($email) || empty($password)) {
            redirect_to('../signup.php?error=emptyfeilds&name=' . $name . '&email=' . $email);
        }
        else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            redirect_to('../signup.php?error=invalidemail&name=' . $name);
        }
        else if ($password != $cPassword) {
            redirect_to('../signup.php?error=passwordsdonotmatch&name=' . $name . '&email=' . $email);
        }
        else {

            $sql = "select * from users where email='$email'";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            if($resultCheck > 0){
                redirect_to('../signup.php?error=userexists&name='.$name);
            }

            else{
                $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
                $sql = "insert into users(name, email, password) values('$name', '$email', '$hashedPwd')";
                $result = mysqli_query($conn, $sql);
                mysqli_close($conn);
                redirect_to('../login.php');
            }
        }
    }
