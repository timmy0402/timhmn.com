<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Set up email parameters
    $to = "minhnhathb04@gmail.com"; // Your email address
    $subject = "New Contact Form Submission";
    $headers = "From: $email";

    // Compose the email body
    $email_body = "Name: $name\nEmail: $email\nMessage:\n$message";

    // Send the email
    if (mail($to, $subject, $email_body, $headers)) {
        echo "Thank you! Your message has been sent.";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>