<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name    = strip_tags($_POST["name"]);
    $email   = strip_tags($_POST["email"]);
    $message = strip_tags($_POST["message"]);

    $to = "gagan@v2k.in";   // ← CHANGE THIS
    $subject = "New Contact Message from $name";

    $body = "Name: $name\n".
            "Email: $email\n\n".
            "Message:\n$message\n";

    $headers = "From: $email\r\nReply-To: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
}
?>
