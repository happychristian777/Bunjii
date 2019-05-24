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
                $type = 'customer';
                $sql = "insert into users(name, email, password, type) values('$name', '$email', '$hashedPwd', '$type')";
                $result = mysqli_query($conn, $sql);

                // Fetching signupid from users table to insert values into customer table

                $signupsql = "select * from users where email='$email'";
                $signupresult = mysqli_query($conn, $signupsql);
                $signuprow = mysqli_fetch_assoc($signupresult);

                $signupid = $signuprow['signupid'];

                $profilesql = "insert into customer(signupid, customer_name, customer_email) values('$signupid', '$name', '$email')";
                $profileresult = mysqli_query($conn, $profilesql);

                mysqli_close($conn);
                redirect_to('../login.php');
            }
        }
    }
