<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$ideas = $_POST['ideas'];
$message = $_POST['message'];

$email_from ='bucketlist.peths@gmail.com'

$email_subject ='New Idea Submission'
    
$email_body = "User Name: $name.\n".
                "User Email: $vistor_email.\n".
                    "Ideas: $ideas.\n".
                        "User Message: $message.\n";

$to = '440000609@gapps.yrdsb.ca';

$headers = "From: $email_from \r\n"

$headers .= "Reply-To: $vistor_email \r\n"
    
mail($to,$email_subject,$email_body,$headers)

header("Location: contact.html");
?>