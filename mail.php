<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function



//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->IsSMTP(); 

    $mail->CharSet="UTF-8";
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPDebug = 1; 
    $mail->Port = 587 ; //465 or 587

     $mail->SMTPSecure = 'tls';  
    $mail->SMTPAuth = true; 
    $mail->IsHTML(true);

    //Authentication
    $mail->Username = "prolaraveldevelopers@gmail.com";
    $mail->Password = "ipukmunaakgghxee";

    //Set Params
    $mail->SetFrom("prolaraveldevelopers@gmail.com");
    $mail->AddAddress("kedar.shidhaye@somaiya.edu");
    $mail->Subject = "Test";
    $mail->Body = "hello";


     if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
     } else {
        echo "Message has been sent";
     }