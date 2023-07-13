<?php
if($_POST){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $to = 'nneomacharity@outlook.com';
    $subject = 'New message from your portfolio';

    $headers = "From: $email" . "\r\n" .
    "Reply-To: $email" . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
    echo 'Message sent. Thank you!';
}
?>
