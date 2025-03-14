<?php
	//INCLUDE PHPMAILER
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMAiler\Exception;

	require "../assets/phpmailer/src/Exception.php";
	require "../assets/phpmailer/src/PHPMailer.php";
	require "../assets/phpmailer/src/SMTP.php";

	//CREATE EMAIL
	$mail = new PHPMailer(TRUE);

	try
	{
		//SERVER SETTINGS
		$mail->isSMTP();
		$mail->Host 		= 'smtp.gmail.com';
		$mail->SMTPAuth		=	TRUE;
		$mail->Username 	= 'firstglobaltechnoparkcarmona@gmail.com';
		$mail->Password 	= 'cowpgitxhzbdxyah';
		$mail->SMTPSecure	= PHPMailer::ENCRYPTION_SMTPS;
		$mail->Port 		= 465;

		//SENT FROM
		$mail->setFrom('firstglobaltechnoparkcarmona@gmail.com', 'Mailer');

		//SENT TO
		$mail->addAddress('firstglobaltechnopark@gmail.com');

		//EMAIL CONTENT
		$mail->isHTML(TRUE);
		$mail->Subject 		= $_POST['subject'];
		$mail->Body 		= "Name: " . $_POST['name'] . "<br>" .
							  "Email Address: " . $_POST['email'] . "<br>" .
							  "Message: " . "<br>" . $_POST['message'];

		//SEND EMAIL
		$mail->send();

		echo "<script>
				alert('Message has been sent. Thank you.');
			  </script>";

		header('Refresh: 0; URL = ../home.php');

	}
	catch(Exception $e)
	{
		echo "<script>
				alert('Message could not be sent. Mailer Error: " . $mail->ErrorInfo . "');
			  </script>";

		header('Refresh: 0; URL = ../home.php');
	}
?>