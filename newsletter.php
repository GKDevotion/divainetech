<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $email = htmlspecialchars($_POST['email'] ?? '');


    if(empty($email)){

        echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>

        <script>
        Swal.fire({
            title:'Oops!',
            text:'Please enter your email address.',
            icon:'warning',
            confirmButtonColor:'#aa8038'
        }).then(()=>{
            history.back();
        });
        </script>";

        exit;
    }



    // Admin Email
    $to = "hardikprajapati8104@gmail.com";


    // Mail Subject
    $subject = "New Newsletter Subscription";


    // Professional Email Design

    $message = '

    <html>
    <head>
    <style>

        body{
            font-family: Arial, sans-serif;
            background:#f5f5f5;
            padding:20px;
        }

        .container{
            max-width:600px;
            background:#ffffff;
            margin:auto;
            padding:30px;
            border-radius:10px;
            border:1px solid #eee;
        }

        .header{
            background:#aa8038;
            color:#ffffff;
            padding:15px;
            text-align:center;
            border-radius:8px;
            font-size:22px;
            font-weight:bold;
        }

        .content{
            padding:25px 10px;
            font-size:16px;
            color:#333;
        }

        .email-box{
            background:#f8f8f8;
            padding:15px;
            border-radius:6px;
            font-weight:bold;
            color:#aa8038;
        }

        .footer{
            margin-top:20px;
            font-size:13px;
            color:#777;
            text-align:center;
        }

    </style>
    </head>


    <body>

    <div class="container">

        <div class="header">
            Newsletter Subscription
        </div>


        <div class="content">

            <p>
            You have received a new newsletter subscription.
            </p>


            <p>
            Subscriber Email:
            </p>


            <div class="email-box">
                '.$email.'
            </div>


        </div>


        <div class="footer">
            © '.date("Y").' Divaine Tech. All Rights Reserved.
        </div>


    </div>


    </body>
    </html>

    ';



    // Headers

    $headers  = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8\r\n";
    $headers .= "From: Newsletter <noreply@".$_SERVER['SERVER_NAME'].">\r\n";
    $headers .= "Reply-To: ".$email."\r\n";



    if(mail($to,$subject,$message,$headers)){


        echo "

        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>


        <script>

        Swal.fire({

            title:'Thank You!',
            text:'You have successfully subscribed to our newsletter.',
            icon:'success',
            confirmButtonColor:'rgb(255, 101, 0);'

        }).then(()=>{

            window.location.href='index.php';

        });

        </script>";



    }else{


        echo "

        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>


        <script>

        Swal.fire({

            title:'Error!',
            text:'Something went wrong. Please try again.',
            icon:'error',
            confirmButtonColor:'rgb(255, 101, 0);'

        }).then(()=>{

            history.back();

        });

        </script>";

    }



}else{

    header("Location:index.php");
    exit;

}

?>