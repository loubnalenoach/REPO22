<?php	
	if(empty($_POST['name']) && strlen($_POST['name']) == 0 || empty($_POST['email']) && strlen($_POST['email']) == 0 || empty($_POST['input_504']) && strlen($_POST['input_504']) == 0 || empty($_POST['message']) && strlen($_POST['message']) == 0||
	!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
	{
		echo "Veuillez remplir les informations obligatoires";
		return false;
		
	}
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$input_504 = $_POST['input_504'];
	$message = $_POST['message'];
	
	$to = 'loubna_sahbou@yahoo.fr'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from your website";
	$email_body = "You have received a new message. \n\n".
				  "Name: $name \nEmail: $email \nInput_504: $input_504 \nMessage: $message \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@agencelapanthere.com\n";
	$headers .= "Reply-To: $email";	
	
	//mail($to,$email_subject,$email_body,$headers); // Post message
	$success = mail($to,$email_subject,$email_body,$headers);
	print 'To : ' . $to;
	print 'Subject : ' . $email_subject;
	print 'Body : ' . $email_body;
	print 'Headers : ' . $headers;
	print 'Success : ' . $success;
	
	return true;			
?>