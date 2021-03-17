<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $telephon = $_POST['telephone'];
    $message = $_POST['message'];

    $email_form = "edicafe.yazhu@gmail.com";
    $email_subject = "New Visitor";
    $email_body = "Name : $name.\n"
                  "Visitor email : $visitor_email.\n"
                  "Telephone : $telephon.\n"
                  "Message : $message.\n";
    $to = "edicafe.yazhu@gmail.com";
    $headers = "From : $email_form\r\n";
    $headers .= "Reply To : $visitor_email\r\n";
    mail($to,$email_subject,$email_body,$headers);
    header("Location : index.html");
?>