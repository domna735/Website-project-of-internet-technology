<?php
ini_set('SMTP', 'domna735@gmail.com');
ini_set('smtp_port', 587);

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];


    if (empty($name) || empty($email) || empty($message)) {
        echo "Error: Name, Email, and Message fields are required.";
        exit;
    }


    $to = "domna735@gmail.com";

    // Set the email subject
    $subject = "Contact Form Submission from ccLearn";

    // Create the email message
    $email_message = "Name: " . $name . "\n";
    $email_message .= "Email: " . $email . "\n";
    $email_message .= "Message: \n" . $message . "\n";

    // Send the email using the mail() function
    if (mail($to, $subject, $email_message)) {
        echo "Thank you for contacting us! We will get back to you soon.";
    } else {
        echo "Error sending the email. Please try again later.";
    }
}
?>
