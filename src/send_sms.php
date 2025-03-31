<?php
use Twilio\Rest\Client;

function send_sms($phone, $message) {
    $sid = $_ENV['TWILIO_SID'];
    $token = $_ENV['TWILIO_AUTH_TOKEN'];
    $twilioPhone = $_ENV['TWILIO_PHONE'];

    // Ensure the phone number is in E.164 format
    if (!str_starts_with($phone, '+')) {
        $phone = '+63' . ltrim($phone, '0'); // Add country code for the Philippines
    }

    $client = new Client($sid, $token);
    $client->messages->create($phone, [
        'from' => $twilioPhone,
        'body' => $message
    ]);
}
?>
