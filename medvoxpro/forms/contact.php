<?php
/**
 * Contact form handler — sends via Web3Forms API (no SMTP/DNS needed)
 * Matches assets/vendor/php-email-form/validate.js expectations:
 * - Responds with the literal text "OK" on success
 * - Responds with a plain error message string on failure
 */

$web3forms_access_key = '3da797e7-fd29-4d89-9272-c38a8f64ef99';

if (!isset($_POST['email'])) {
    http_response_code(403);
    die('Form submission failed. Please contact the developer.');
}

// Honeypot field — if filled, it's a bot, silently pretend success
if (!empty($_POST['website'])) {
    die('OK');
}

$name    = isset($_POST['name']) ? strip_tags(trim($_POST['name'])) : '';
$email   = isset($_POST['email']) ? filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL) : '';
$subject = isset($_POST['subject']) ? strip_tags(trim($_POST['subject'])) : '';
$message = isset($_POST['message']) ? trim($_POST['message']) : '';

if (empty($name) || empty($email) || empty($subject) || empty($message)) {
    http_response_code(400);
    die('Please fill in all required fields.');
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    die('Please enter a valid email address.');
}

$payload = [
    'access_key' => $web3forms_access_key,
    'name'       => $name,
    'email'      => $email,
    'subject'    => 'MedVoxPro Contact Form: ' . $subject,
    'message'    => $message,
    'from_name'  => 'MedVoxPro Website',
];

$ch = curl_init('https://api.web3forms.com/submit');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'Accept: application/json',
]);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 15);

$response = curl_exec($ch);
$curl_error = curl_error($ch);
curl_close($ch);

if ($response === false) {
    error_log('Web3Forms request failed: ' . $curl_error);
    http_response_code(500);
    die('Something went wrong sending your message. Please try again later.');
}

$result = json_decode($response, true);

if (isset($result['success']) && $result['success'] === true) {
    die('OK');
} else {
    $err = isset($result['message']) ? $result['message'] : 'Unknown error';
    error_log('Web3Forms error: ' . $err);
    http_response_code(500);
    die('Something went wrong sending your message. Please try again later.');
}
