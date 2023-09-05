<?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = 'ankitmenariya30@gmail.com';
    $subject = 'Contact Form Submission';
    $message = "Name: $name\nEmail: $email\nSubject: $subject\nMessage: $message";

    mail($to, $subject, $message);
  }
?>