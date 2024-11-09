<?php
// Include PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Adjust path to PHPMailer classes
require 'PHPMailer/PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer/PHPMailer-master/src/SMTP.php';
require 'PHPMailer/PHPMailer-master/src/Exception.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // Instantiate PHPMailer
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP();
        $mail->Host = 'mimosa.hostns.io'; // SMTP server hostname
        $mail->SMTPAuth = true;
        $mail->Username = 'info@globalmeded.in'; // Your SMTP username (e.g., email address)
        $mail->Password = 'GlobalMedEd'; // Your SMTP password
        $mail->SMTPSecure = 'tls'; // Enable TLS encryption, 'ssl' also accepted
        $mail->Port = 587; // TCP port to connect to

        //Recipients
        $mail->setFrom($email, $name);
        $mail->addAddress('info@globalmeded.in'); // Replace with recipient's email address

        //Content
        $mail->isHTML(false); // Set email format to HTML
        $mail->Subject = 'New Donation Form Submission';
        $mail->Body    = "Name: $name $lname\nEmail: $email\nMessage:\n$message";

        // Send the email
        $mail->send();
        echo 'Message has been sent successfully!';
    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
    }
} else {
    // Redirect back to the form if accessed directly
    // header("Location: donat.php");
    exit();
}
?>
