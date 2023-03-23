<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // Send email
  $to = "sohelranassr221@gmail.com";
  $subject = "New contact form submission";
  $body = "Name: $name\nEmail: $email\nMessage: $message";
  mail($to, $subject, $body);

  // Redirect to thank-you page
  header("Location: thank-you.html");
  exit();
}
?>
