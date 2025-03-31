<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function send_email($email, $name, $message) {
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = $_ENV['SMTP_HOST'];
        $mail->SMTPAuth = true;
        $mail->Username = $_ENV['SMTP_USER'];
        $mail->Password = $_ENV['SMTP_PASS'];
        $mail->SMTPSecure = 'tls';
        $mail->Port = $_ENV['SMTP_PORT'];

        $mail->setFrom($_ENV['SMTP_USER'], 'Your Name');
        $mail->addAddress($email, $name);
        $mail->Subject = "Message Received";
        $mail->Body = "Hi $name, thank you for reaching out. Your message: $message";

        $mail->send();
    } catch (Exception $e) {
        echo "Email could not be sent. Error: " . $mail->ErrorInfo;
    }
}
?>
