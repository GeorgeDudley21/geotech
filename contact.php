<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Your email address
    $to = "georgedudley07@gmail.com"; 
    $subject = "New Business Mail";

    // Email content
    $email_content = "Name: $name\n";
    $email_content = "Email: $email\n";
    $email_content = "Subject: $subject\n";
    $email_content = "Message: \n$message\n";

    // Email header
    $headers = "From: $email";

    // Send the email
    if (mail($to, $subject, $email_content, $headers)) {
        echo "Message sent successfully.";
    } else {
        echo "There was a problem sending the message. Please try again.";
    }
}
?>