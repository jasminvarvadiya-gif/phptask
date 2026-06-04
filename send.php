<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $age = $_POST['age'];
    $mail = new PHPMailer(true);

    try {

     
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;

        $mail->Username = 'jasminvarvadiya@gmail.com';
        $mail->Password = 'hhss sbeb ivsv wwef';

        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;


        $mail->setFrom('jasminvarvadiya@gmail.com', 'Contact Form');
        $mail->addAddress('jasminvarvadiya@gmail.com');

        // Reply to user
        $mail->addReplyTo($email, $name);

        // Email Content
        $mail->isHTML(true);
        $mail->Subject = ' New Contact Form Submission';

        $mail->Body = "
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        </head>
        <body style='margin:0;padding:20px;background:#f4f6f9;font-family:Arial,sans-serif;'>

        <table width='100%' cellpadding='0' cellspacing='0'>
            <tr>
                <td align='center'>

                    <table width='600' cellpadding='0' cellspacing='0'
                        style='background:#ffffff;border-radius:12px;overflow:hidden;
                        box-shadow:0 4px 15px rgba(0,0,0,0.1);'>

                        <tr>
                            <td style='background:#667eea;color:white;padding:25px;text-align:center;'>
                                <h1 style='margin:0;'>Contact Form</h1>
                                <p style='margin:10px 0 0;'>New Message Received</p>
                            </td>
                        </tr>

                        <tr>
                            <td style='padding:30px;'>

                                <h3 style='color:#333;'>User Details</h3>

                                <table width='100%' cellpadding='10'>
                                    <tr>
                                        <td><strong>Name</strong></td>
                                        <td>$name</td>
                                    </tr>

                                    <tr>
                                        <td><strong>Email</strong></td>
                                        <td>$email</td>
                                    </tr>
                                </table>

                                <h3 style='color:#333;'>Message</h3>

                                <div style='background:#f8f9fa;padding:15px;
                                border-left:4px solid #667eea;border-radius:6px;'>
                                    $message
                                </div>

                            </td>
                        </tr>

                        <tr>
                            <td style='background:#f8f9fa;padding:15px;
                            text-align:center;color:#777;'>
                                © 2026 Contact Form
                            </td>
                        </tr>

                    </table>

                </td>
            </tr>
        </table>

        </body>
        </html>
        ";

        $mail->send();

        echo "
        <div style='max-width:500px;margin:50px auto;padding:25px;
        background:#d4edda;color:#155724;border-radius:10px;
        text-align:center;font-family:Arial'>
            <h2>✅ Email Sent Successfully</h2>
            <p>Thank you, $name. Your message has been sent.</p>
            <a href='index.php'>Go Back</a>
        </div>
        ";

    } catch (Exception $e) {

        echo "
        <div style='max-width:500px;margin:50px auto;padding:25px;
        background:#f8d7da;color:#721c24;border-radius:10px;
        text-align:center;font-family:Arial'>
            <h2> Email Failed</h2>
            <p>{$mail->ErrorInfo}</p>
        </div>
        ";
    }
}
?>