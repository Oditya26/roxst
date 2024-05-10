<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form field data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Email receiver
    $to = 'receiver@example.com';

    // Email headers
    $headers = "From: $name <$email>" . "\r\n";
    $headers .= "Reply-To: $email" . "\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";

    // Email content
    $email_content = "
    <html>
    <head>
        <title>$subject</title>
    </head>
    <body>
        <h2>Message from $name</h2>
        <p>$message</p>
    </body>
    </html>
    ";

    // Send email
    if (mail($to, $subject, $email_content, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
}
?>