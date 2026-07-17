<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $first_name = trim($_POST['first_name'] ?? '');
    $last_name  = trim($_POST['last_name'] ?? '');
    $phone      = trim($_POST['phone'] ?? '');
    $email      = trim($_POST['email'] ?? '');
    $subject    = trim($_POST['subject'] ?? '');
    $message    = trim($_POST['msg'] ?? '');

    $name = $first_name . ' ' . $last_name;

    $mail = new PHPMailer(true);

    try {

        // SMTP Configuration
        $mail->isSMTP();
        $mail->Host       = 'smtpout.secureserver.net';     // SMTP Host
        $mail->SMTPAuth   = true;
        $mail->Username   = 'hello@divainetech.io';    // SMTP Email
        $mail->Password   = 'hEl10@dwan1ek';     // SMTP Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // SSL
        $mail->Port       = 465;

        // Sender
        $mail->setFrom('hello@divainetech.io', 'Divaine Tech Website');

        // Recipient
        $mail->addAddress('hello@divainetech.io', 'Divaine Tech');

        // Reply to customer
        if (!empty($email)) {
            $mail->addReplyTo($email, $name);
        }

        // Email Content
        $mail->isHTML(true);
        $mail->Subject = 'New Customer Inquiry Received - ' . $name;

        $mail->Body = "
        <h2>New Contact Form Submission</h2>

        <table cellpadding='8' cellspacing='0' border='1'>
            <tr>
                <td><strong>Name</strong></td>
                <td>{$name}</td>
            </tr>
            <tr>
                <td><strong>Email</strong></td>
                <td>{$email}</td>
            </tr>
            <tr>
                <td><strong>Phone</strong></td>
                <td>{$phone}</td>
            </tr>
            <tr>
                <td><strong>Subject</strong></td>
                <td>{$subject}</td>
            </tr>
            <tr>
                <td><strong>Message</strong></td>
                <td>" . nl2br(htmlspecialchars($message)) . "</td>
            </tr>
        </table>
        ";

        $mail->AltBody = "
            Name: {$name}
            Email: {$email}
            Phone: {$phone}
            Subject: {$subject}

            Message:
            {$message}
            ";

        $mail->send();

        echo "<script>
            alert('Message sent successfully.');
            window.location='contact.php';
        </script>";

    } catch (Exception $e) {

        echo "<script>
            alert('Mail could not be sent. Error: " . addslashes($mail->ErrorInfo) . "');
            window.history.back();
        </script>";
    }
}