<?php

	if (isset($_POST['name']) &&!empty($_POST['name'])&&isset($_POST['email'])&&!empty($_POST['email'])&&isset($_POST['message'])&&!empty($_POST['message'])) {
		$to = "contact@saurabhportfolio";
		$toMail = "saurabhbaliyan000@gmail.com";
		$subject = "Contact by ".$_POST['name'];
		$name_field = $_POST['name'];
		$email_field = $_POST['email'];
		$message = $_POST['message'];

		$headers = 'From: '.$_POST['email'].'' . "\r\n" .
		   'Reply-To: '.$_POST['email'].'' . "\r\n" .
		   'X-Mailer: PHP/' . phpversion();

		$body = $message;

		mail($to, $subject, $body, $headers );
		mail($toMail, $subject, $body, $headers );

		echo '<h1 class="success">Thank You.</h1>';
	}else{
		echo '<h1 class="fail">Oops, something went wrong. Try again.</h1>';
	}
    echo "Redirecting you to Home page<span>...</span>";
	header("Refresh:3;url=contact.php");
?>