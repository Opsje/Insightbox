<?php
$name = $_POST['contactName'];
$email = $_POST['contactEmail'];
$subject = $_POST['contactSubject'];
$message = $_POST['contactMessage'];
$formcontent=" From: $name \n Email: $email \n Subject: $subject \n Message: $message";
$recipient = "moritz@insightbox.org";
$sub = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $sub, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='index.php' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>