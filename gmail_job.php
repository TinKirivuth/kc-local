<?php
    //SMTP needs accurate times, and the PHP time zone MUST be set
    //This should be done in your php.ini, but this is how to do it if you don't have access to that
    // date_default_timezone_set('Etc/UTC');
    date_default_timezone_set('Asia/Phnom_Penh');
    // include('languages/config.php');
    require 'phpmailer/PHPMailerAutoload.php';
    if(isset($_POST['submit'])){
        $uploaddir = 'cv-upload/';
        $ext = pathinfo(basename($_FILES['txt_file']['name']),PATHINFO_EXTENSION);
        $t = time();
        $uploadfile = $uploaddir.$t.'.'.$ext;
        if (move_uploaded_file($_FILES['txt_file']['tmp_name'], $uploadfile)) {
            $email=$_POST['txt_email'];
            $message=$_POST['txt_message'];
            $subject='Apply Job';
            $body = $message.', ['.$email.'], ['.$subject.'].';
            $current_url=$_POST['txt_current_url'];
            
            //Create a new PHPMailer instance
            $mail = new PHPMailer;

            //Tell PHPMailer to use SMTP
            $mail->isSMTP();

            //Enable SMTP debugging
            // 0 = off (for production use)
            // 1 = client messages
            // 2 = client and server messages
            $mail->SMTPDebug = 0;

            //Ask for HTML-friendly debug output
            $mail->Debugoutput = 'html';

            //Set the hostname of the mail server
            $mail->Host = 'smtp.gmail.com';

            //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
            $mail->Port = 587;

            //Set the encryption system to use - ssl (deprecated) or tls
            $mail->SMTPSecure = 'tls';

            //Whether to use SMTP authentication
            $mail->SMTPAuth = true;

            //Username to use for SMTP authentication - use full email address for gmail
            $mail->Username = "kc.private.web@gmail.com";

            //Password to use for SMTP authentication
            $mail->Password = "123abc+-*/";

            //Set who the message is to be sent from
            //what email that u want to use for complaint
            $mail->setFrom($email, '');

            //Set an alternative reply-to address
            //complainer email
            $mail->addReplyTo($email, '');

            //Set who the message is to be sent to
            //marketing@khmercapital.com.kh
            //no-replay.kc@mg.camcyber.com
            $mail->addAddress('kc.private.web@gmail.com','');

            //Set the subject line
            $mail->Subject = $subject;

            //Read an HTML message body from an external file, convert referenced images to embedded,
            //convert HTML into a basic plain-text alternative body
            // $mail->msgHTML(file_get_contents('emails/question_email_content.php'), dirname(__FILE__));
            $mail->Body = $body;

            //Replace the plain text body with one created manually
            // $mail->AltBody = 'This is a plain-text message body';

            //Attach an image/file if you want to attach file you need to enable this row
            $mail->addAttachment($uploadfile);

            //send the message, check for errors
            if (!$mail->send()) {
                echo "Mailer Error: " . $mail->ErrorInfo;
            } else {
                // echo "Message sent!";
                header("Location: $current_url");
            }
        }
    }
    
    //Section 2: IMAP
    //IMAP commands requires the PHP IMAP Extension, found at: https://php.net/manual/en/imap.setup.php
    //Function to call which uses the PHP imap_*() functions to save messages: https://php.net/manual/en/book.imap.php
    //You can use imap_getmailboxes($imapStream, '/imap/ssl') to get a list of available folders or labels, this can
    //be useful if you are trying to get this working on a non-Gmail IMAP server.
    function save_mail($mail) {
        //You can change 'Sent Mail' to any other folder or tag
        $path = "{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail";

        //Tell your server to open an IMAP connection using the same username and password as you used for SMTP
        $imapStream = imap_open($path, $mail->Username, $mail->Password);

        $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
        imap_close($imapStream);

        return $result;
    }
