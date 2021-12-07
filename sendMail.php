<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require 'Mail/src/PHPMailer.php';
    require 'Mail/src/SMTP.php';
    require 'Mail/src/EXCEPTION.php';

    //Load Composer's autoloader
    // require 'vendor/autoload.php';
   
    $email = $_POST["email"];

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 3;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'eunicescintich@gmail.com';                     //SMTP username
        $mail->Password   = 'Seigneur2020';                               //SMTP password
        $mail->SMTPSecure = 'tls';          //Enable implicit TLS encryption
        $mail->Port       = 25;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_seft_signed' => true,
            ));
        //Recipients
        $mail->setFrom('eunicescintich@gmail.com', 'scintich Ndanga');
        $mail->addAddress($email, 'Kelvine Djokouo');     //Add a recipient
              //Name is optional
        // $mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Here is the subject';
        $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        if(!$mail->send()){
            // echo "bonjour";
            sleep(2000);
            header("location:index.php");
        }
        else{
            sleep(2000);
            header("location:index.php");
        }
        $message = '';
        echo $message = 'Message has been sent';
        
    } 
    catch (Exception $e) {

        echo $message = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
?>