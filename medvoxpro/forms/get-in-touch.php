<?php
/**
 * Handles the "Get in Touch" modal form (name, email, organization,
 * number of users, message). Same response contract as contact.php.
 */

require __DIR__ . '/mail-config.php';

header('Content-Type: text/plain; charset=UTF-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST' || empty($_SERVER['HTTP_X_REQUESTED_WITH']) || strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) !== 'xmlhttprequest') {
    http_response_code(403);
    echo 'Forbidden';
    exit;
}

$name         = isset($_POST['name']) ? medvox_clean($_POST['name']) : '';
$email        = isset($_POST['email']) ? medvox_clean($_POST['email']) : '';
$organization = isset($_POST['organization']) ? medvox_clean($_POST['organization']) : '';
$users        = isset($_POST['users']) ? medvox_clean($_POST['users']) : '';
$message      = isset($_POST['message']) ? trim($_POST['message']) : '';

// Honeypot: if this hidden field is filled, silently pretend success.
if (!empty($_POST['website'])) {
    echo 'OK';
    exit;
}

$errors = [];
if ($name === '') {
    $errors[] = 'Full name is required.';
}
if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'A valid email address is required.';
}

if (!empty($errors)) {
    http_response_code(400);
    echo implode(' ', $errors);
    exit;
}

$body  = "New \"Get in Touch\" request from the MedVox Pro website\n\n";
$body .= "Full Name: {$name}\n";
$body .= "Email: {$email}\n";
$body .= 'Organization: ' . ($organization !== '' ? $organization : '-') . "\n";
$body .= 'Number of Users: ' . ($users !== '' ? $users : '-') . "\n\n";
$body .= "Message:\n" . ($message !== '' ? $message : '-') . "\n";

$sent = medvox_send_mail(
    $receiving_emails,
    $from_email,
    $from_name,
    'Get in Touch: ' . $name,
    $body,
    $email,
    $name
);

if ($sent) {
    echo 'OK';
} else {
    http_response_code(500);
    echo 'Sorry, something went wrong while sending your request. Please try again later or email us directly.';
}
