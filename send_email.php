<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Load SMTP credentials (not committed to version control)
require __DIR__ . '/config.php';

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and get form data
    $name = htmlspecialchars($_POST['name']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    // Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = SMTP_HOST;                              // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = SMTP_USERNAME;                          // SMTP username
        $mail->Password   = SMTP_PASSWORD;                          // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            // Enable SSL encryption
        $mail->Port       = SMTP_PORT;                              // TCP port to connect to

        //Recipients
        $mail->setFrom(SMTP_FROM_ADDRESS, SMTP_FROM_NAME);
        $mail->addAddress(SMTP_FROM_ADDRESS, SMTP_FROM_NAME);       // Add a recipient

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'New Inquiry from Website';
        $mail->Body    = "You have received a new inquiry from your website contact form.<br><br>" .
            "<b>Name:</b> " . $name . "<br>" .
            "<b>Email:</b> " . $email . "<br>" .
            "<b>Phone:</b> " . $phone . "<br>" .
            "<b>Message:</b><br>" . nl2br($message);
        $mail->AltBody = "You have received a new inquiry from your website contact form.\n\n" .
            "Name: " . $name . "\n" .
            "Email: " . $email . "\n" .
            "Phone: " . $phone . "\n" .
            "Message:\n" . $message;

        $mail->send();
        // Redirect to a thank you page or show a success message
        header('Location: thank-you.html'); // Make sure you have a thank-you.html page
        exit;
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    // If not a POST request, redirect to the form
    header('Location: index.php');
    exit;
}
