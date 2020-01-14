<?php

use PHPMailer\PHPMailer\PHPMailer;

require 'PHPMailer/src/Exception.php';
	require 'PHPMailer/src/OAuth.php';
	require 'PHPMailer/src/PHPMailer.php';
	require 'PHPMailer/src/POP3.php';
	require 'PHPMailer/src/SMTP.php';

	require 'PHPMailer/get_oauth_token.php';

	//initilialization

	$mail = new PHPMailer();

	try{
		 //Server settings                    // Enable verbose debug output
		 $mail->isSMTP();                                            // Send using SMTP
		 $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
		 $mail->SMTPAuth   = true;     
		 $mail->SMTPSecure = 'ssl';                              // Enable SMTP authentication                            															
		 $mail->Port       = '465';  
		 $mail->isHTML();
		 $mail->Username = 'akilaliyanagelive@gmail.com';
		 $mail->Password = 'Akila2133@';                                // TCP port to connect to

		//Recipients
		$mail->setFrom('akilaliyanagelive@gmail.com');          // Name is optional
		$mail->Subject = 'Website Messages';
		$mail->Body = "testmail";
		$mail->addAddress('mlakilaliyanage@gmail.com');
	
	
		$mail->send();
		echo 'Message has been sent';
	}

	catch(Exception $e){
		echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	}

?>
