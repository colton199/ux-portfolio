<?php

if (isset($_POST['submit'])){
	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$mailfrom = $_POST['mail'];
	$message = $_POST['message'];


	$mailTO = "c0lt0njoyce@aol.com";
	$headers = "From: ".$mailFrom;
	$txt = "you have received an email from ".$name.".\n\n".$message;


	mail($mailTo, $subject, $txt, $headers);
	header("location: contact.html?mailsend");




}

?>