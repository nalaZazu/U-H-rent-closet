<?php
$to_email = "uswanadeem242@gmail.com";
$subject = "Simple Email Test via PHP";
$body = "Welcom, to there our webiste";
$headers = "From:uswanadeem242@gmail.com ";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}