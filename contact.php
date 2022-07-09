<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $POST['message'];

    $email_from = 'website@arindams.com';

    $email_subject = "New Form Submission";

    $email_body = "User Name: $name.\n".
                    "User Email: $visttor_email.\n".
                        "User Message: $message. \n";

    $to = "arindams2002@gmail.com";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $visttor_email \r\n";
    mail($to,$email_subject, $email_body, $headers) ;

    header("Location: contact.html");
?>