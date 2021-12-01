<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	$email_from = 'ashiqraian@portfolio.com'
	
	$email_body = "Name: $name.\n".
					"Email: $email.\n".
						"Message: $message.\n";


	$to="ashiqraian14@gmail.com"; 

	$headers = "From: $email \r\n";

	$headers .= "Reply-To: $email \r\n";

	mail($to,$email_body,$headers);

	header("Location: index.html");

?>