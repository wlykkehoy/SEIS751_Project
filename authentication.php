<?php
/* ============================================================
    This code is requires the user to authenticate (i.e. enter
    a username and password). If they do so correctly they gain
    access to a secret page.
============================================================ */

  $enteredUserName = htmlspecialchars(trim($_SERVER['PHP_AUTH_USER']));
  $enteredPassword = htmlspecialchars(trim($_SERVER['PHP_AUTH_PW']));

  if (($enteredUserName == "sake") and ($enteredPassword == "sake")) {
    $validated = true;
  } else {
    $validated = false;
  }
  
  if (!$validated) {
    header('WWW-Authenticate: Basic realm="Restricted Section"');
    header('HTTP/1.0 401 Unauthorized');
    
    // User only sees the following if they click 'Cancel'
    // Note we can echo back as elaborate HTML as we like,
    // even do an include/require of a page.
    echo <<<_END
      <style>
        .error {
          font-weight: bold;
          font-size: 2rem;
          color: red;
          text-align: center;
        }
        .hint {
          font-weight: bold;
          font-size: 1rem;
          color: black;
          text-align: center;
        }
        .back {
          font-size: 1.25rem;
          text-align: center;
          margin-top: 2rem;
        }
      </style>
      <p class="error">Please enter your username and password</p>
      <p class="hint">(hint: 'sake' / 'sake')</p>
      <p class="back"><a href="javascript:history.back();">Back</a></p>
_END;
    exit();
  }
  
  // Only get to here if the user is validated
  header("location:secret-page.php");

?>


