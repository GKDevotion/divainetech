<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

$email = trim((string)($_POST['email'] ?? ''));
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Invalid Email</title>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>
    <body>
        <script>
            Swal.fire({
                title: 'Invalid Email!',
                text: 'Please enter a valid email address.',
                icon: 'warning',
                confirmButtonColor: '#aa8038'
            }).then(() => {
                history.back();
            });
        </script>
    </body>
    </html>
    <?php
    exit;
}

$to = 'hardikprajapati8104@gmail.com';
$subject = 'New Newsletter Subscription';
$siteName = 'Divaine Tech';
$host = $_SERVER['HTTP_HOST'] ?? 'divainetech.io';
$fromAddress = 'newsletter@' . ($host === 'localhost' ? 'divainetech.io' : $host);

$message = '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        body { margin:0; padding:20px; background:#f4f4f4; font-family:Arial,Helvetica,sans-serif; }
        .container { max-width:600px; margin:auto; background:#ffffff; border-radius:10px; overflow:hidden; border:1px solid #ddd; }
        .header { background:#aa8038; color:#fff; text-align:center; padding:20px; font-size:24px; font-weight:bold; }
        .content { padding:30px; }
        .content h2 { margin-top:0; color:#333; }
        .email-box { background:#fafafa; border-left:5px solid #aa8038; padding:15px; font-size:18px; color:#aa8038; font-weight:bold; word-break:break-word; }
        .footer { background:#f7f7f7; text-align:center; padding:20px; color:#888; font-size:13px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">Newsletter Subscription</div>
        <div class="content">
            <h2>New Subscriber</h2>
            <p>A new user has subscribed to your newsletter.</p>
            <p><strong>Email Address</strong></p>
            <div class="email-box">' . htmlspecialchars($email, ENT_QUOTES, 'UTF-8') . '</div>
        </div>
        <div class="footer">© ' . date('Y') . ' ' . $siteName . '. All Rights Reserved.</div>
    </div>
</body>
</html>';

$headers = [];
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=UTF-8';
$headers[] = 'From: ' . $siteName . ' <' . $fromAddress . '>';
$headers[] = 'Reply-To: ' . $email;
$headers[] = 'X-Mailer: PHP/' . phpversion();
$headers[] = 'Return-Path: <' . $fromAddress . '>';

$mailSent = mail($to, $subject, $message, implode("\r\n", $headers), '-f' . $fromAddress);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Newsletter</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <?php if ($mailSent) { ?>
        <script>
            Swal.fire({
                title: 'Thank You!',
                text: 'You have successfully subscribed.',
                icon: 'success',
                confirmButtonColor: '#aa8038'
            }).then(function () {
                window.location = 'index.php';
            });
        </script>
    <?php } else { ?>
        <script>
            Swal.fire({
                title: 'Mail Failed',
                text: 'Your server could not send the newsletter email. Please contact your hosting provider or check the server mail configuration.',
                icon: 'error',
                confirmButtonColor: '#aa8038'
            }).then(function () {
                history.back();
            });
        </script>
    <?php } ?>
</body>
</html>