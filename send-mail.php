<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $first_name = htmlspecialchars($_POST['first_name'] ?? '');
    $last_name  = htmlspecialchars($_POST['last_name'] ?? '');
    $phone      = htmlspecialchars($_POST['phone'] ?? '');
    $email      = htmlspecialchars($_POST['email'] ?? '');
    $subject    = htmlspecialchars($_POST['subject'] ?? '');
    $message    = htmlspecialchars($_POST['msg'] ?? '');

    $name = $first_name . " " . $last_name;

    // Receiver Email
    $to = "hardikprajapati8104@gmail.com"; 

    $mail_subject = "New Contact Inquiry Received - " . $name;

    $mail_body = "
        New Customer Inquiry

        Name: $name

        Phone: $phone

        Email: $email

        Subject: $subject

        Message:
        $message
        ";

   
    // Replace this with your own domain if live
    $domain = "https://www.divainetech.io/";

    $headers = [];
    $headers[] = "MIME-Version: 1.0";
    $headers[] = "Content-type: text/html; charset=UTF-8";
    $headers[] = "From: Website <no-reply@$domain>";
    $headers[] = "Reply-To: $email";
    $headers[] = "X-Mailer: PHP/" . phpversion();
 
    if (mail($to, $mail_subject, $mail_body, $headers)) {

        echo "
        <!DOCTYPE html>
        <html>
        <head>
            <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        </head>
        <body>

        <script>
        Swal.fire({
            title: 'Success!',
            text: 'Your message has been sent successfully.',
            icon: 'success',
            confirmButtonColor: 'rgb(255, 101, 0)'
        }).then(() => {
            window.location.href='contact.php';
        });
        </script>

        </body>
        </html>
        ";

    } else {

        echo "
        <!DOCTYPE html>
        <html>
        <head>
            <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        </head>
        <body>

        <script>
        Swal.fire({
            title: 'Error!',
            text: 'Failed to send message. Please try again.',
            icon: 'error',
            confirmButtonColor: 'rgb(255, 101, 0)'
        }).then(() => {
            window.history.back();
        });
        </script>

        </body>
        </html>
        ";

    }

} else {

    header("Location: contact-us.php");
    exit();

}

?>