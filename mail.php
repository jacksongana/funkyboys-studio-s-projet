<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'phpmailer/src/PHPMailer/PHPMailer/PHPMailer.php';
require 'phpmailer/src/PHPMailer/PHPMailer/Exception.php';
require 'phpmailer/src/PHPMailer/PHPMailer/SMTP.php';

if (isset($_POST['Send'])) {
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'funkyboyspro@gmail.com';
    $mail->Password = '';
    $mail->SMTPSecure = 'ssl';
    $mail->Port =465;

    $mail->setFrom('funkyboyspro@gmail.com');
    $mail->addAddress($_POST["email"]);


 //Content
    $name = $_POST["name"] ;
    $email= $_POST["mail"] ;
    $sujet = $_POST['sujet'];
    $message= $_POST["message"];

    $mail->isHTML(true);//envoie du mail en format html
    $mail->Subject = 'nouveau message';
    $mail->Body    = "Vous avez reçu un message de $name $sujat ($email) donc le message est: $message ";
    $mail->AltBody = 'Vous avez reçu un nouveau message';

    $mail->send();
   
echo'

<!DOCTYPE html>
<html lang="fr">
    
    
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta http-equiv="X-UA-Compatible" content="IE=7">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact</title>
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="contact.css">
    </head>
    
    <body>
        
        
        <div class="container">

            <h1>Merci de nous contacter. Nous vous répondrons dès que possible !</h1>

            <p class="back">Cliquez<a class="back" href="index.php">ici</a>pour retourner au page principale</p>

           
 
        
        
        
        
    </body>
</html>



';
}

?>
