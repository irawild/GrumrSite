<?php	
	if(empty($_POST['name2']) || empty($_POST['']) || empty($_POST['']) || empty($_POST['email2']) || empty($_POST['']) || empty($_POST['']))
	{
		return false;
	}
	
	$name2 = $_POST['name2'];
	$ = $_POST[''];
	$ = $_POST[''];
	$email2 = $_POST['email2'];
	$ = $_POST[''];
	$ = $_POST[''];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from Grumr.";
	$email_body = "You have received a new message. \n\n".
				  "Name2: $name2 \n: $ \n: $ \nEmail2: $email2 \n: $ \n: $ \n";
	$headers = "From: contact@yoursite.com\n";
	$headers .= "Reply-To: $email2";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>