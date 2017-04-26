<?php
if($_POST["submit"]) {
    $recipient="ishaniamin@gmail.com"; //Enter your mail address
    $subject="Contact from Website"; //Subject 
    $firstName=$_POST["firstName"];
    $lastName=$_POST["lastName"];
    $senderEmail=$_POST["email"];
    $message=$_POST["message"];
    $mailBody="First Name: $firstName\nLast Name: $lastName\nEmail Address: $senderEmail\n\nMessage: $message";
    mail($recipient, $subject, $mailBody);
	sleep(1);
	header("http://ishaniamin.herokuapp.com/"); // Set here redirect page or destination page
}
?>