<!DOCTYPE html>
<html>
<head>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width">
  	<title>Chelsea Schaefer - Contact Me</title>
  	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="scripts/jQuery.js"></script>
	<style>
		footer {position: absolute;	bottom: 0;}
	</style>


<?php
# run from http://localhost:7777/PHP/contact.html

	extract ($_REQUEST, EXTR_SKIP);

	if (isset ($name) && isset($email) && isset($phone) 
	&& isset($message)) {

		/* Subject and Email Variables*/ 
		$recipient = "chelsea2point0@gmail.com";
		$msgSubject = "New Message from chelseaschaefer.com";
		$headers = array('From: chelsea2point0@gmail.com',
			'Reply To: chelsea2point0@gmail.com',
			'X-Mailer: PHP/' . PHP_VERSION
			);
		$headers = implode("\r\n", $headers);
		$msgBody = 
			"You have received a new message from $name: \r\n
			Phone: $phone \r\n 
			Email: $email \r\n
			Message: $message \r\n";
		
		$send = mail($recipient, $msgSubject, $msgBody, $headers, "-f chelsea2point0@gmail.com");		
	};

?>

</head>

<body>
	<div class="container">
		<header id="top">
			<p><a href="resume.html">RESUME</a> | <a href="portfolio.html">PORTFOLIO</a> | <a href="contact.html" class="currentPage">CONNECT</a></p>
			<hr>
		</header>
		<section class="center">
			<h2  class="chelsea">Chelsea Schaefer</h2>
			<h3>Let's Connect.</h3>
			<div class="socialMedia" class="center" id="connectSocial">
	          	<a href="https://github.com/chelsea2point0" target="_blank"><img src="images/github.png" alt="githubLogo"></a>
	          	<a href="https://www.linkedin.com/profile/view?id=46847969" target="_blank"><img src="images/linkedin.png" alt="linkedinLogo"></a>
	          	<a href="mailto:chelseajoyschaefer@gmail.com" target="_blank"><img src="images/email.png" alt="emailLogo"></a>
	          	<a href="https://twitter.com/chels_schaefer" target="_blank"><img src="images/twitter.png" alt="twitterLogo"></a>
	      	</div>
			<p class="message" id="clear"><em>I would love to hear from you! I am always interested in networking opportunities with other web developers and technology enthusiasts. I am also currently seeking a Web Development position and would be delighted to discuss my qualifications with you further if you are looking for a web developer to join your team.  Feel free to reach out to me via social media, e-mail, or by submitting the form below. Thank you!</em></p>
		</section>
		<section id="contactMe">
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" >
				<table >
					<tr>
						<td class="right"><label for="name">Name:</label></td>
						<td><input type="text" name="name" id="name" required></td>
					</tr>

					<tr>
						<td class="right"><label for="email">E-mail:</label></td>
						<td><input type="text" name="email" id="email" required></td>
					</tr>

					<tr>
						<td class="right"><label for="phone">Phone:</label></td>
						<td><input type="text" name="phone" id="phone" required></td>
					</tr>

					<tr>
						<td class="right"><label for="message">Message to Chelsea:</label></td>
						<td><textarea name="message" id="message" cols="50" rows="5" required></textarea></td>
					</tr>

					<tr>
						<td></td>
						<td><input type="submit" name="submit" value="Send Message"></td>
					</tr>
				</table>
			</form>

		<?php
		if (isset ($submit)) {

			if ($send) {
				echo '<br><p style="color: red;">Thank you for your message! I will be in touch shortly.</p>';
				} else {
				echo '<br><p style="color: red;">Oops, something went wrong. Message did not send.</p>';
			}
		}
		?>	

		</section>
	</div>

<footer>
	<p>Thank you for visiting my website. I look forward to speaking with you soon!</p>
</footer>
		         
</body>
</html>