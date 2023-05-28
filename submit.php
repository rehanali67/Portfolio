<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get form data
  $firstName = $_POST["first_name"];
  $lastName = $_POST["last_name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // Email address to receive the message
  $to = "a.reshanali522@gmail.com";

  // Subject of the email
  $subject = "New Contact Form Submission";

  // Compose the email message
  $emailMessage = "You have received a new contact form submission:\n\n";
  $emailMessage .= "Name: " . $firstName . " " . $lastName . "\n";
  $emailMessage .= "Email: " . $email . "\n";
  $emailMessage .= "Message: " . $message . "\n";

  // Set headers
  $headers = "From: " . $email . "\r\n";
  $headers .= "Reply-To: " . $email . "\r\n";

  // Send the email
  if (mail($to, $subject, $emailMessage, $headers)) {
    // Email sent successfully
    echo "success";
  } else {
    // Failed to send email
    echo "error";
  }
}
?>
