<?php
session_start();
include 'db_conn.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

function sendemail_verify($name, $email, $verify_token){
    $mail = new PHPMailer(true);
    
    $mail->isSMTP();                                            //Send using SMTP
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->Username   = 'charlcrtz17@gmail.com';                     //SMTP username
    $mail->Password   = 'secret';                               //SMTP password

    $mail->SMTPSecure = "tls";            //Enable implicit TLS encryption
    $mail->Port       = 587;                                  //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    $mail->setFrom("charlcrtz17@gmail.com", $name);
    $mail->addAddress($email);     //Add a recipient

    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Email Verification';

    $email_template = "
    <h2>Hi $name</h2>
    <p>Thanks for signing up with us. Please click on the link below to verify your email address.</p>
    <a href='http://127.0.0.1:5501/verify.php?token=$verify_token'>Verify Email</a>";

    $mail->Body = $email_template;
    $mail->send();
    //echo 'Email has been sent';

}
   

if(isset($_POST["signup"])){
    $name = $_POST['username'];
    $email = $_POST['email'];
    $studentNum = $_POST['studentNum'];
    $password = $_POST['password'];
    $verify_token = md5(rand());

    sendemail_verify("$name", "$email", "$verify_token");
    echo "sent or not?";

    // // Email Exists or not
    // $check_email = "SELECT email FROM users WHERE email = '$email' LIMIT 1";
    // $result = mysqli_query($conn, $check_email);

    // if(mysqli_num_rows($result) > 0){
    //     $_SESSION['status'] = "Email already exists";
    //     header('Location: login.php');
    // }else{
    //     // Insert data into database
    //     $sql = "INSERT INTO users (username, email, studentNum, password, verify_token) VALUES ('$name', '$email', '$studentNum', '$password', $verify_token)";
    //     $sql_run = mysqli_query($conn, $sql);
    //     if($sql_run){
    //         sendemail_verify("$name", "$email", "$verify_token");
    //         $_SESSION['status'] = "Registration Successful!. Please verify your email address.";
    //         header('Location: login.html');

    //     }else{
    //         $_SESSION['status'] = "Registration failed";
    //         header('Location: login.html');
    //     }
    // }
}
  

?>