<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
require_once(realpath(dirname(__FILE__) . '/../PHPMailer/src/Exception.php'));
require_once(realpath(dirname(__FILE__) . '/../PHPMailer/src/PHPMailer.php'));
require_once(realpath(dirname(__FILE__) . '/../PHPMailer/src/SMTP.php'));

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Mailer_Controller
{
	public $baseName = 'mailer';
	public function main(array $vars) // a router �ltal tov�bb�tott param�tereket kapja
	{
        //Create an instance; passing `true` enables exceptions
	$mail = new PHPMailer(true);
	
	try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'dodniraccoon@gmail.com';                     //SMTP username
    $mail->Password   = 'DodniRaccoon123';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('dodniraccoon@gmail.com', 'Mailer');
    $mail->addAddress('feherdonat99@gmail.com');     //Add a recipient


    //Content
    $mail->isHTML(false);                                  //Set email format to HTML
    $mail->Subject = 'Testing PHPMailer';
    $mail->Body    = 'Szia <b>Donát!</b>';

    $mail->send();
	
    echo 'Message has been sent';
	
	} catch (Exception $e) {
		echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	}
		//bet�ltj�k a n�zetet
        $view = new View_Loader($this->baseName."_main");
		
		
		
	}
	
}

?>
