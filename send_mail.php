<?php
if (isset($_GET['submit'])) {
    $fname = htmlspecialchars($_GET['fname']);
    $lname = htmlspecialchars($_GET['lname']);

  $email = htmlspecialchars($_GET['email']);
      $phone = htmlspecialchars($_GET['phone']);

    $message = htmlspecialchars($_GET['message']);

    
    $to = 'm.gamal.zaid1@gmail.com'; // Replace with your email address
    $subject = 'Portofolio';
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-type: text/html\r\n";

    $body = "<h2>Message From Portofolio</h2>";
    $body .= "<p><strong>Name:</strong> " . $fname. ' ' $lname . "</p>";
    $body .= "<p><strong>Email:</strong> " . $email . "</p>";
   $body .= "<p><strong>Phone:</strong> " . $phone . "</p>";
    $body .= "<p><strong>Message:</strong><br>" . nl2br($message) . "</p>";

    if (mail($to, $subject, $body, $headers)) {
        echo 'Email sent successfully.';
    } else {
        echo 'Failed to send email.';
    }
} else {
    echo 'Invalid request method.';
}
?>
