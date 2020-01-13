<?php
//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
// date_default_timezone_set('Etc/UTC');
date_default_timezone_set('Asia/Phnom_Penh');
// include('languages/config.php');
require 'phpmailer/PHPMailerAutoload.php';
if(isset($_POST['submit'])){
    $name=$_POST['txt_qname'];
    $phone=$_POST['txt_qphone'];
    $email=$_POST['txt_qemail'];
    $subject=$_POST['txt_qsubject'];
    $message=$_POST['txt_qmessage'];
    $body = $message.' '.$name.', '.$phone.', '.$email.', '.$subject.'.';
    $current_url=$_POST['txt_current_url'];
    
    //Create a new PHPMailer instance
    $mail = new PHPMailer;

    //Tell PHPMailer to use SMTP
    $mail->isSMTP();

    //Enable SMTP debugging
    $mail->SMTPDebug = 0;

    //Ask for HTML-friendly debug output
    $mail->Debugoutput = 'html';

    //Set the hostname of the mail server
    $mail->Host = 'smtp.gmail.com';

    //Set the SMTP port number 
    $mail->Port = 587;

    //Set the encryption system to use - ssl (deprecated) or tls
    $mail->SMTPSecure = 'tls';

    //Whether to use SMTP authentication
    $mail->SMTPAuth = true;

    //Username to use for SMTP authentication - use full email address for gmail
    //$mail->Username = "chantha@khmercapital.com.kh";
    //$mail->Password = "Kc@Mail2020";
    
    $mail->Username = "kc.private.web@gmail.com";
    $mail->Password = "123abc+-*/";

    //Set who the message is to be sent from
    $mail->setFrom($email, $name);

    //Set an alternative reply-to address
    $mail->addReplyTo($email, $name);

    //Set who the message is to be sent to
    $mail->addAddress('kc.private.web@gmail.com', '');

    //Set the subject line
    $mail->Subject = $subject;

    // Set Mail Body
    $mail->Body = $body;

    //send the message, check for errors
    if (!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        header("Location: $current_url");
    }
}  

function save_mail($mail) {

    $path = "{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail";

    $imapStream = imap_open($path, $mail->Username, $mail->Password);

    $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
    imap_close($imapStream);

    return $result;
}
