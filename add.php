<?php
 
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php'; 

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;


$url = $_SERVER['HTTP_REFERER'];

// URL'yi "?" karakterinden bölelim
$parts = explode("?", $url);

// "?" karakterinden önceki kısmı alalım
$beforeQuestionMark = $parts[0];


$type = $_POST['type'];
if($type==1){
    $regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
    if (!preg_match($regex, htmlspecialchars(trim($_POST['email'])))) {
        header('Location: '.$beforeQuestionMark.'?error=2');
        exit;
    }
    else if(htmlspecialchars(trim($_POST['email']))==null){
        header('Location: '.$beforeQuestionMark.'?error=2');
        exit;
    }
    else if(htmlspecialchars(trim($_POST['phone']))==null){
        header('Location: '.$beforeQuestionMark.'?error=3');
        exit;
    }
        // $captha_example = htmlspecialchars(trim($_POST['captha_example']));
        // $captha = htmlspecialchars(trim($_POST['captcha']));
    
        // if ($captha != $captha_example) {
        //     header('location: '.$beforeQuestionMark.'?error=1');
        //     exit;
        // }
        $name = htmlspecialchars(trim($_POST['name']));
        $email = htmlspecialchars(trim($_POST['email']));
        $phone = htmlspecialchars(trim($_POST['phone']));
        $message = htmlspecialchars(trim($_POST['message']));
        

        
            $mail = new PHPMailer(true);
            try {
                // Server settings
                $mail->SMTPDebug = SMTP::DEBUG_SERVER; // Enable verbose debug output
                $mail->isSMTP(); // Send using SMTP
                $mail->Host = 'smtp.yandex.com'; // Set the SMTP server to send through
                $mail->SMTPAuth = true; // Enable SMTP authentication
                $mail->Username = 'webmaster@butagrup.com.tr'; // SMTP username
                $mail->Password = 'butamBT**.SrkETI'; // SMTP password
                $mail->Port = 465; // TCP port to connect to
                $mail->SMTPSecure = 'ssl';
                $mail->SMTPDebug = false;
         
                // Recipients 
                $mail->setFrom('webmaster@butagrup.com.tr','Bayburt Savunma');
                $mail->addAddress('info@baysav.com ','Bayburt Savunma');
                // Content
                $mail->isHTML(true); // Set email format to HTML
                $mail->CharSet = 'UTF-8';
                $mail->Subject = 'İletişim Formu';
                $mail->Body = 'Hörmətli Butagrup, sizə '.$name.' tərəfindən bir mesaj var<br/><br/><strong>Mesaj: </strong>'.$message.'<br/>E-mail: </strong>'.$email.'<br/>Numara: </strong>'.$phone.'';
                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                $mail->send();
                $mail->ClearAddresses();
                echo "1";
                header('Location: '.$beforeQuestionMark.'?success=1');
                exit;
                
            } catch (Exception $e) {
                header('Location: '.$beforeQuestionMark.'?error=1');
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
         } 
?>