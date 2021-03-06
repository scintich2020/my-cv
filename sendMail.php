<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    use Dompdf\Dompdf;
    use Dompdf\Options;

    require 'Mail/src/PHPMailer.php';
    require 'Mail/src/SMTP.php';
    require 'Mail/src/EXCEPTION.php';

    // require_once 'dompdf/autoload.inc.php';


    // // instantiate and use the dompdf class
    // $dompdf = new Dompdf();
    // $dompdf->loadHtml('hello world');

    // // (Optional) Setup the paper size and orientation
    // $dompdf->setPaper('A4', 'landscape');

    // // Render the HTML as PDF
    // $dompdf->render();

    // // Output the generated PDF to Browser
    // $dompdf->stream();

    
    // $options = new Options();
    // $options->set('defaultFont', 'Courier');
    // $dompdf = new Dompdf($options);

    // $dompdf = new Dompdf();
    // $options = $dompdf->getOptions();
    // $options->setDefaultFont('Courier');
    // $dompdf->setOptions($options);




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

        ob_start();
        require "index.php";
        $body = ob_get_contents();
        ob_end_clean();

        

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'my-cv';
        $mail->Body    = $body;
        $mail->AltBody = 'This is the body in plain text for non-H  TML mail clients';

        if(!$mail->send()){
            // echo "bonjour";
            echo $message = 'Message has not been sent';
            header("location:/index.php");
        }
        else{
            echo $message = 'Message has been sent';
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