<?php	
	if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['confirmpassword']))
	{
		return false;
	}
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$confirmpassword = $_POST['confirmpassword'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from Grumr.";
	$email_body = "You have received a new message. \n\n".
				  "Name: $name \nEmail: $email \nPassword: $password \nConfirmpassword: $confirmpassword \n";
	$headers = "From: contact@yoursite.com\n";
	$headers .= "Reply-To: $email";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>