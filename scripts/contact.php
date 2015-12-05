<?php
	extract ($_REQUEST, EXTR_SKIP);

	/* Gathering Data Variables */
	
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	if (isset ($name) && isset($email) && isset($phone) 
	&& isset($message)) {

		/* Subject and Email Variables */
		$recipient = "chelseajoyschaefer@gmail.com";
		$msgSubject = "New Message from chelseaschaefer.com";
		$msgHeader = "From: CHELSEASCHAEFER.com <chelseajoyschaefer@gmail.com>\r\n";
		$msgBody = "You have received a new message from $name. <br> Phone: $phone <br> Email: $email. <br>Message: $message";
		
		mail($recipient, $msgSubject, $msgBody, $msgHeader);
		
		if (mail) {
			echo "Thank you for your message! I will be in touch shortly.";
		} else {
			echo "Oops, something went wrong.";
		};
		
?>
