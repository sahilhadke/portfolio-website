<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'includes/PHPMailer/src/Exception.php';
require 'includes/PHPMailer/src/PHPMailer.php';
require 'includes/PHPMailer/src/SMTP.php';

function validate_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $data = preg_replace('!\s+!', ' ', $data);
    return $data;
}

$name = validate_input($_POST['name']);
$email = validate_input($_POST['email']);
$message = validate_input($_POST['message']);


$mail = new PHPMailer(true);

$email_message = <<<END
    <p>
        Name: $name
    </p>
    <p>
        Subject: $email
    </p>
    <p>
        Message: $message
    </p>

END;
$email_message_nohtml = <<<END
   
        $name - 
   
         $email - 
   
       $message - 
    

END;
/*
try {
    $to = "sahil.hadke@gmail.com";
    $subject = "My subject";
    $txt = $email_message;
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: mrgamez123456789@gmail.com";

    if(mail($to,$subject,$txt,$headers)){
        echo '1';
    }

} catch (Exception $e) {
    echo $e;
}
*/

try {
    $mail->isSMTP();                      
    $mail->Host = 'smtp.gmail.com';       
    $mail->SMTPAuth = true;               
    $mail->Username = getenv('senderEmail');   
    $mail->Password = getenv('senderEmailPassword');   
    $mail->SMTPSecure = 'tls'; 
    $mail->Port = 587;
    $mail->setFrom(getenv('senderEmail'), 'Website Mailer');
    $mail->addAddress(getenv('receiverEmail'), getenv('to_name')); 


    $mail->isHTML(true);                                 
    $mail->Subject = 'Contacted from Website';
    $mail->Body    = $email_message;
    $mail->AltBody = $email_message_nohtml;

    $mail->send();
    echo '1';
} catch (Exception $e) {
    echo $e;
}


?>