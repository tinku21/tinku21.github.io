<?php
/**
 * Shared mail configuration for MedVox Pro forms.
 * Edit $receiving_emails below any time you want to change where
 * form submissions are delivered.
 */

// Where submissions are sent. Add/remove addresses here.
$receiving_emails = [
    'gagan@v2k.in',
    'gagtin@gmail.com',
];

// The "From" address forms will appear to be sent from.
// Use an address on your own domain (e.g. no-reply@medvoxpro.ai) for
// best deliverability once you've set up email on that domain.
$from_email = 'no-reply@medvoxpro.ai';
$from_name  = 'MedVox Pro Website';

/**
 * Sends $body to every address in $receiving_emails.
 * Returns true only if every send succeeded.
 */
function medvox_send_mail(array $receiving_emails, string $from_email, string $from_name, string $subject, string $body, string $reply_to_email = '', string $reply_to_name = ''): bool {
    $headers   = [];
    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/plain; charset=UTF-8';
    $headers[] = sprintf('From: %s <%s>', medvox_encode_header($from_name), $from_email);

    if ($reply_to_email !== '') {
        $reply_label = $reply_to_name !== '' ? medvox_encode_header($reply_to_name) : $reply_to_email;
        $headers[] = sprintf('Reply-To: %s <%s>', $reply_label, $reply_to_email);
    }

    $headers_str = implode("\r\n", $headers);
    $all_sent = true;

    foreach ($receiving_emails as $to) {
        $ok = @mail($to, medvox_encode_header($subject), $body, $headers_str);
        if (!$ok) {
            $all_sent = false;
        }
    }

    return $all_sent;
}

function medvox_encode_header(string $value): string {
    return '=?UTF-8?B?' . base64_encode($value) . '?=';
}

/** Basic string cleanup: trims, strips header-injection characters. */
function medvox_clean(string $value): string {
    $value = trim($value);
    $value = str_replace(["\r", "\n"], ' ', $value);
    return $value;
}
