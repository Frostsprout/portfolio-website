<?php ob_start();

	if(isset($_POST['submit'])) {
		$to = "rebeccabradley@outlook.com";
		$subject = $_POST['subject'];
		$email = $_POST['email'];
		$txt = $_POST['message'];
		$headers = "From: " . $email . "\r\n" .
		"CC: somebodyelse@example.com";
		
		mail($to, $subject, $txt, $headers);
		
		header("location: contact.html");
		
	}