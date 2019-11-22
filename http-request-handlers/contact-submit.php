<?php
/* ============================================================
    This code is for handling the contact form submit
============================================================ */

  $name = htmlspecialchars(trim($_REQUEST["name"]));
  $emailAddr = htmlspecialchars(trim($_REQUEST["email-address"]));
  $message = htmlspecialchars(trim($_REQUEST["message"]));

  $info = "Message submitted on SEIS751 project contact page!!<br><br>";
  $info .= "From: " . $emailAddr . "<br><br>";
  $info .= "Message: " . $message;

  // not sure if the email service is set up; never get anything through
  mail("wadelykkehoy@gmail.com", "Message from SEIS751 project contact page", $info);
  
  echo <<<_END
  <h3>
    Thanks $name for the message!
  </h3>
  <a href="../contact.php">Back to the contact page</a>
_END

?>

