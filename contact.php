<?php
if($_POST["submit"]) {
    $recipient="ishaniamin@gmail.com"; //Enter your mail address
    $subject="Contact from Website"; //Subject 

    $firstName=$_POST["firstName"];
    $lastName=$_POST["lastName"];
    $senderEmail=$_POST["email"];
    $message=$_POST["message"];

    $mailBody="First Name: $firstName\nLast Name: $lastName\nEmail Address: $senderEmail\n\nMessage: $message";
    mail($recipient, $subject, $mailBody), "From: $sender <$senderEmail>");;
	
    $thankYou="<p>Thank you! Your message has been sent.</p>";
}
?>