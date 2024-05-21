<?php
session_start();
include 'db_conn.php';


if(isset($_POST["signup"])){
    $name = $_POST['username'];
    $email = $_POST['email'];
    $studentNum = $_POST['studentNum'];
    $password = $_POST['password'];
    $verify_token = md5(rand());

    // Email Exists or not
    $check_email = "SELECT email FROM users WHERE email = '$email' LIMIT 1";
    $result = mysqli_query($conn, $check_email);

    if(mysqli_num_rows($result) > 0){
        $_SESSION['status'] = "Email already exists";
        header('Location: login.php');
    }else{
        // Insert data into database
        $sql = "INSERT INTO users (username, email, studentNum, password, verify_token) VALUES ('$name', '$email', '$studentNum', '$password', $verify_token)";
        $sql_run = mysqli_query($conn, $sql);
        if($sql_run){
            sendemail_verify("$name", "$email", "$verify_token");
            $_SESSION['status'] = "Registration Successful!. Please verify your email address.";
            header('Location: login.html');

        }else{
            $_SESSION['status'] = "Registration failed";
            header('Location: login.html');
        }
    }
}
  

?>