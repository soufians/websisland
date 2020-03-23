<?php
header('Content-Type: text/html; charset=utf-8');
if( isset($_POST['n']) && isset($_POST['e']) && isset($_POST['p']) && isset($_POST['m']) ){

	$n = $_POST['n']; // HINT: use preg_replace() to filter the data

	$e = $_POST['e'];

	$p = $_POST ['p'];

	$m = nl2br($_POST['m']);

	$to = "info@websisland.com";

	$from = $e;

	$subject = 'Websisland Message';

	$message = '<b>Name:</b> '.$n.' <br><b>Email:</b> '.$e.'<br><b>Phone:</b> '.$p.' <br><p>'.$m.'</p>';

	$headers = "From: $from\n";

	$headers .= "MIME-Version: 1.0\n";

	$headers .= "Content-type: text/html; charset=utf-8\n";

	if( mail($to, $subject, $message, $headers) ){

		echo "success";

	} else {

		echo "The server failed to send the message. Please try again later.";

	}

}

?>
