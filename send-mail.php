<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name    = htmlspecialchars($_POST['fullName']);
    $phone   = htmlspecialchars($_POST['phone']);
    $email   = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    $to = "hardikprajapati8104@gmail.com";

    $mail_subject = "New Customer Inquiry Received - " . $name;

    $mail_body = "
    Full Name: $name

    Phone: $phone

    Email: $email

    Subject: $subject

    Message:
    $message
    ";

    $headers  = "From: noreply@" . $_SERVER['SERVER_NAME'] . "\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    if (mail($to, $mail_subject, $mail_body, $headers)) {
        echo "<script>
                alert('Message sent successfully!');
                window.location.href='contact.php';
              </script>";
    } else {
        echo "<script>
                alert('Failed to send message.');
                window.history.back();
              </script>";
    }
}
?>