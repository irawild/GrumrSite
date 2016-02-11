<?php	
	if(empty($_POST['name3']) || empty($_POST['email3']))
	{
		return false;
	}
	
	$name3 = $_POST['name3'];
	$email3 = $_POST['email3'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from Grumr.";
	$email_body = "You have received a new message. \n\n".
				  "Name3: $name3 \nEmail3: $email3 \n";
	$headers = "From: contact@yoursite.com\n";
	$headers .= "Reply-To: $email3";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>