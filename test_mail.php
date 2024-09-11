<?php
$to = 'vjvignesh277@gmail.com';
$subject = 'Test Email';
$message = 'This is a test email.';
$headers = 'From: test@example.com';

if (mail($to, $subject, $message, $headers)) {
    echo 'Mail sent successfully.';
} else {
    echo 'Mail sending failed.';
}
?>
