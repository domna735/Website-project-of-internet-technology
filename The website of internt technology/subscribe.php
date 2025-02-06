<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    // Validate the email (you can add more validation if needed)
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Error: Invalid email format.";
        exit;
    }

    // Save the email to a text file (replace 'subscribers.txt' with the desired filename)
    $file = fopen('subscribers.txt', 'a');
    fwrite($file, "$email\n");
    fclose($file);

    // Optionally, you can send a confirmation email to the subscriber
    // Replace 'your_email@example.com' with your email address
    $to = $email;
    $subject = 'Thank you for subscribing!';
    $message = "Thank you for subscribing to ccLearn's newsletter. You will receive updates on the latest internet technologies.";
    mail($to, $subject, $message);

    // Redirect back to the homepage after subscription
    header("Location: index.php");
}
?>

