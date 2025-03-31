<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require '../src/config.php';
require '../src/send_sms.php';
require '../src/send_email.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// Insert Data into MySQL
$stmt = $conn->prepare("INSERT INTO messages (name, email, phone, message) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $name, $email, $phone, $message);
$stmt->execute();

if ($stmt->affected_rows > 0) {
    send_sms($phone, "Hello $name, we received your message: $message");
    send_email($email, $name, $message);
    echo "Message stored & notifications sent!";
} else {
    echo "Error storing message.";
}
?>
