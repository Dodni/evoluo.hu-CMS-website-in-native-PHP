<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
require_once(realpath(dirname(__FILE__) . '/../PHPMailer/src/Exception.php'));
require_once(realpath(dirname(__FILE__) . '/../PHPMailer/src/PHPMailer.php'));
require_once(realpath(dirname(__FILE__) . '/../PHPMailer/src/SMTP.php'));

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Kapcsolatbead_Controller
{
	public $baseName = 'kapcsolatbead';  //meghat�rozni, hogy melyik oldalon vagyunk
	public function main(array $vars) // a router �ltal tov�bb�tott param�tereket kapja
	{
        //Teszteléshez:
        //var_dump($vars);
		
		//Formból az adatok
		$nev = strval( $vars['nev']);
		$email = strval( $vars['email']);
		$telefonszam = strval( $vars['telefonszam']);
		$uzenet = strval( $vars['uzenet']);

		$beadmodell = new Bead_Model;
		//var_dump($vars);
		$retData = $beadmodell -> getEmail();
		//var_dump($retData['beadbeallit']['0']['email']);
		//Kinek küldjük az emailt
		$emailTo = $retData['beadbeallit']['0']['email'];
		//echo $emailTo;		

		//Create an instance; passing `true` enables exceptions
		$mail = new PHPMailer(true);
		
		
		try {
    		//Server settings
    		$mail->SMTPDebug = SMTP::DEBUG_OFF;                      //Enable verbose debug output
    		//$mail->{-code-1}  = SMTP::DEBUG_OFF; 
    		$mail->isSMTP();
			
		/*	
			//LOCALHOST,XAMPON MUKODIK, SZERVEREN NEM!                                            
			//Send using SMTP
    		$mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    		$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    		$mail->Username   = 'dodniraccoon@gmail.com';                     //SMTP username
    		$mail->Password   = 'DodniRaccoon123';                               //SMTP password
    		$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    		$mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    		//Recipients
    		$mail->setFrom('dodniraccoon@gmail.com', 'Kapcsolat form uzenet');
    		$mail->addAddress(strval( $emailTo ) );     //Add a recipient
		*/	

			// SZERVEREN EZ MŰKÖDIK
		//$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    		$mail->isSMTP();                                            //Send using SMTP
    		$mail->Host       = 'mail.evoluo.hu';                     //Set the SMTP server to send through
    		$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    		$mail->Username   = 'evoluo@evoluo.hu';                     //SMTP username
    		$mail->Password   = 'AOJJRaHDuU9p';                               //SMTP password
    		$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    		$mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    		//Recipients
    		$mail->setFrom('evoluo@evoluo.hu', 'Kapcsolat form uzenet');
    		$mail->addAddress(strval( $emailTo ) );     //Add a recipient

			

		

    		//Content
    		$mail->isHTML(false);                                  //Set email format to HTML
    		$mail->Subject = 'Kapcsolat form uzenet';
    		$mail->Body    = 	'
Új e-mail érkezett a kapcsolat formba:
Név: ' . $nev . '
E-mail: ' . $email . '
Telefonszám: ' . $telefonszam . '
Üzenet: ' . $uzenet . '
								';

    		$mail->send();
	
    		//echo 'Message has been sent';
	
		} catch (Exception $e) {
			echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		}
		
		
        
        $kapcsolatmodel = new Kapcsolat_Model;
		$view = new View_Loader($this->baseName."_main");
        $retData = $kapcsolatmodel -> post_data($vars);
		//bet�ltj�k a n�zetet
		foreach($retData as $name => $value)
			$view->assign($name, $value);
       
		
		
			
	}
}

?>