<!-- Executing phpmailer!-->
<?php
	require ("C:\wamp64\www\phpmailer\PHPMailerAutoload.php");
	$mail = new PHPMailer;

	//$mail->SMTPDebug = 3;                               // Enable verbose debug output

	$mail->isSMTP();                                      // Set mailer to use SMTPAuth
	$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'mail@gmail.com';                 // SMTP username
	$mail->Password = 'password';                           // SMTP password
	$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;                                  // TCP port to connect to
	$mail->ContentType = 'text/html';


	$mail->setFrom('mail@gmail.com');	
	$mail->addAddress($_GET["Email"]);     // Add a recipient // Name is optional
	$mail->addReplyTo('mail@gmail.com', 'fivestarreadymadegarments');
	$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
	$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
	$mail->isHTML(true);                                  // Set email format to HTML

	$mail->Subject = 'Great,Lets Start';
	$mail->Body    = "Hi " .$_GET["Name"] . ", <br> <br>"  .
					 "Looking forward to provide support. We will keep you updated on all the latest offers and discounts available at our store to make sure you fetch the best prices.For any info or queries feel free to reply us at this email.<br> <br> You can also review us at <a href='https://g.co/kgs/oHDxfK'>Google.</a>  <br> <br> Happy shopping! <br> <br> -Team Five Star" ;

	if(!$mail->send()) {
    	echo 'Message could not be sent.';
    	echo 'Mailer Error: ' . $mail->ErrorInfo;
    	echo "<br>";
	}
	/*else
	{
    	echo '<b>Check your mail</b>';
 	}
 	*/
?>