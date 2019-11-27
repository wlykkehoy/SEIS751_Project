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


  // Pop up a simple page thanking the user for their message
  echo <<<_END
    <style>
      .thanks {
        font-weight: bold;
        font-size: 2rem;
        text-align: center;
      }
      .back {
        font-size: 1.25rem;
        text-align: center;
        margin-top: 2rem;
      }
    </style>
    <p class="thanks">Thanks $name for the message!</p>
    <!-- Note: not using href="javascript:history.back();" here as we want to clear the form -->
    <p class="back"><a href="../contact.php">Back to the contact page</a></p>
_END;
?>

