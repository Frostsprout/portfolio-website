<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
	<title>Contact | Rebecca Bradley Dissertation</title>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel ="stylesheet" href="css/style.css">
	
	
	<!-- JQUERY SCRIPTS -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>
	
	<!-- JAVASCRIPT -->
	<script src="js/scripts.js" type="text/javascript"></script>
	
	<!-- FONTS -->
	<link href='https://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Muli|Oxygen' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Playfair+Display' rel='stylesheet' type='text/css'>
	
	<!-- ICON -->
	<link rel="shortcut icon" href="images/dragon-1.ico" />
	
  </head>
<body>
		<div class="container">
			<header class="header">
			<img src="images/header.png" />
		</header>
			
		<nav class="menu">
			<a href="index.html">Home</a> &nbsp; &nbsp; &nbsp;
			<a href="abstract.html">Dissertation</a>&nbsp; &nbsp; &nbsp;
			<a href="about.html">Author</a> &nbsp; &nbsp; &nbsp;
			<a href="contact.html">Contact</a> &nbsp; &nbsp; &nbsp;
		</nav>
	
		
		<article class="main">
		<br>
		<?php 
		
				function has_header_injection($str) {
					return preg_match("/[\r\n]/", $str);
				}
				if(isset ($_POST['contact_submit'])) {
					
					$name = trim($_POST['name']);
					$email = trim($_POST['email']);
					$msg = $_POST['message'];
					
					//HEADER INJECTION CHECK
					
					if(has_header_injection($name) || has_header_injection($email)) {
						die(); // KILL SCRIPT IF TRUE
				}
					if(!$name || !$email || !$msg) {
						echo '<h3>All fields required</h3><p><a id="biblo" href="contact.php">Click here to try again</a></p>';
						exit;
			}
			
		// RECIPIENT IS ME, YES
				
				$to = "rebeccabradley@outlook.com";
				
				// SUBJECT
				
				$subject = "$name sent you a message from contact form";
				
				//message
				
				$message    = "Name: $name\r\n";
				$message   .= "Email: $email\r\n";
				$message   .= "Message:\r\n$msg";
				
				$message = wordwrap($message, 72);
				
				// MAIL HEADERS TO VARIABLE
				
				$headers	 = "MIME-Version: 1.0\r\n";
				$headers 	.= "Content-type: type/plain; charset=iso-8859-1\r\n";
				$headers 	.= "From: $name <$email> \r\n";
				$headers 	.= "X-Priority: 1\r\n";
				$headers	.= "X-MSMail-Priority: High\r\n\r\n";
				
				// SENDING EMAIL
				mail($to, $subject, $message, $headers);
		
		?>
				<!-- SUCCESS MESSAGE -->
			<h3>Thank you for your message.</h3>
			<p id="research">I will try my best to give a fast response. Please allow up to 48 hours.</p>
			<p id="research"><a href="index.html" id="homebutton" class="button">Back to Home</a></p>
			
		<?php } else { ?>
		
		
		<div id="contact-form">
		
			<form method="POST" action="#" id="contact-form">
			
			<h3 id="contact-title">Contact</h3><p id="contact-para">If you would like to message me, or simply ask any questions, <br>
			please feel free to use the contact form below.</p>
		
			<label for="name">Name:</label><input type="text" id="name" name="name" value="">
			<br>
			<br>
			
			<label for="email">Email:</label><input type="email" id="email" name="email" value=""><br><img id="contact-image" src="images/dragon-logo-2.png" />
			<br>
			<br>
			<textarea id="message" name="message" placeholder="Your message..."></textarea><br>
			
			<br>
			<br>
			<div id="contact-submit">
			<input type="submit" name="contact_submit" value="Send Message">
			</div>
		</form>
		
		<?php } ?>
		
		
		
		<br>
		<br>

		
		<a href="#" class="scrollToTop"></a>
		
		</article>
					
		<footer>
			&copy; 2016 Rebecca Bradley &nbsp; 
		</footer>
	</div>
</body>
</html>