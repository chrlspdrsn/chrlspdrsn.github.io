<?php
  $name = $_POST['name'];
  $userEmail = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $email_from = 'pedersoncharlie@gmail.com';
  $email_subject = "New Form Submission";
  $email_body = "User Name: $name.\n".
        "User Email: $userEmail.\n".
        "Subject: $subject.\n".
        "Message: $message.\n";
  $to = "pedersoncharlie@gmail.com";

  mail($to,$email_subject,$email_body);
  header("Location: contact.html");

?>
