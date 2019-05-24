<?php
    require_once ("../../private/initialize.php");
    require_once ("../../private/database.php");

    if(isset($_POST['submit'])) {

        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        if (empty($email) || empty($password)){
            redirect_to('../login.php?error=emptyfeilds&email='.$email);
        }
        else {

            global $conn;

            $sql = "select * from users where email='$email'";
            $result = mysqli_query($conn, $sql);
            if(!($result)){
                die('Invalid query:'.mysqli_error($conn));
            }
            $row = mysqli_fetch_assoc($result);

            $passwordCheck = password_verify($password, $row['password']);

            if($passwordCheck == false){
                redirect_to('../login.php?error=wrongpassword&email='.$email);
            }
            else if($passwordCheck == true){
                session_start();

                $email = $row['email'];
                $id = $row['signupid'];
                $type = $row['type'];

                $_SESSION['user'] = $email;
                $_SESSION['id'] = $id;
                $_SESSION['type'] = $type;
                redirect_to('../index.php?login=success');
            }
            else{
                redirect_to('../index.php?login=wrongpassword');
            }
        }
    }
