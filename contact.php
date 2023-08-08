<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $number = $_POST["number"];
    $email = $_POST["email"];
    $message = $_POST["message1"];

    $to = "support@rosa-data.com"; // Replace with the recipient email address
    $subject = "New Contact Form Submission";
    $headers = "From: $email\r\n";

    $email_body = "Name: $name\n";
    $email_body .= "Number: $number\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Message:\n$message\n";

    if (mail($to, $subject, $email_body, $headers)) {
        echo "Thank you for your message. We will get back to you soon.";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>
