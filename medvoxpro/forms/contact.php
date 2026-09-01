<?php
/**
 * Handles the "Contact" section form (name, email, subject, message).
 * Talks to assets/vendor/php-email-form/validate.js, which expects a
 * plain-text "OK" response on success or an error message otherwise.
 */

require __DIR__ . '/mail-config.php';

header('Content-Type: text/plain; charset=UTF-8');

// Only accept AJAX POSTs from the form's own JS.
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || empty($_SERVER['HTTP_X_REQUESTED_WITH']) || strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) !== 'xmlhttprequest') {
    http_response_code(403);
    echo 'Forbidden';
    exit;
}

$name    = isset($_POST['name']) ? medvox_clean($_POST['name']) : '';
$email   = isset($_POST['email']) ? medvox_clean($_POST['email']) : '';
$subject = isset($_POST['subject']) ? medvox_clean($_POST['subject']) : '';
$message = isset($_POST['message']) ? trim($_POST['message']) : '';

// Honeypot: if this hidden field is filled, silently pretend success.
if (!empty($_POST['website'])) {
    echo 'OK';
    exit;
}

$errors = [];
if ($name === '') {
    $errors[] = 'Name is required.';
}
if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'A valid email address is required.';
}
if ($subject === '') {
    $errors[] = 'Subject is required.';
}
if ($message === '') {
    $errors[] = 'Message is required.';
}

if (!empty($errors)) {
    http_response_code(400);
    echo implode(' ', $errors);
    exit;
}

$body  = "New message from the MedVox Pro contact form\n\n";
$body .= "Name: {$name}\n";
$body .= "Email: {$email}\n";
$body .= "Subject: {$subject}\n\n";
$body .= "Message:\n{$message}\n";

$sent = medvox_send_mail(
    $receiving_emails,
    $from_email,
    $from_name,
    'Contact form: ' . $subject,
    $body,
    $email,
    $name
);

if ($sent) {
    echo 'OK';
} else {
    http_response_code(500);
    echo 'Sorry, something went wrong while sending your message. Please try again later or email us directly.';
}
