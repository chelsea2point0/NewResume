<?php
/* Subject and Email Variables */
	
	$emailSubject = 'New Message from REBPAC.com';
	$webMaster = 'chelseajoyschaefer@gmail.com';

/* Gathering Data Variables */
	
	$nameField = $_POST['name'];
	$phoneField = $_POST['phone'];
	$emailField = $_POST['email'];
	$customerTypeField = $_POST['customerType'];
	$interestField = $_POST['interest'];
	$messageField = $_POST['message'];

	$body = <<<EOD
<br><hr><br>
Name: $name <br>
Phone Number: $phone <br>
Email: $email <br>
New or Existing: $customerType <br>
I am interested in: $interest <br>
Message: $message <br>
EOD;

	$headers = "From: $email\r\n";
	$headers .= "Content-type: text/html\r\n";
	$success = mail($webMaster, $emailSubject, $body, $headers);

/* Results rendered as HTML */

	$theResults = <<<EOD
<html>
<head>
<title>REB/PAC Business Products - Contact</title>
<link href='https://fonts.googleapis.com/css?family=Raleway:400, 600' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel='stylesheet' href='style.css'/>
</head>
<body>
<p id="results">Your email has been sent! Thank you for contacting REB/PAC.</p>
</body>
</html>
EOD;
echo "$theResults";

?>