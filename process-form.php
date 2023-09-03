<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $to = 'tsatsucephaskwesi@gmail.com';
  $subject = 'New Quote Request';
  $body = "Name: $name\nEmail: $email\nMessage:\n$message";

  // Send email
  mail($to, $subject, $body);
  //echo $body;

  // Redirect to thank you page
  header('Location: thanks.html');
  exit();
}
?>
