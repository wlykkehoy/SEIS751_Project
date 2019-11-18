<?php
  $enteredUserName = htmlspecialchars(trim($_SERVER['PHP_AUTH_USER']));
  $enteredPassword =  htmlspecialchars(trim($_SERVER['PHP_AUTH_PW']));

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
          color: red;
          text-align: center;
          margin-top: 3rem;
        }
      </style>
      <h2 class="error">
        Please enter your username and password
        <p>
          (hint: 'sake' / 'sake')
        </p>
      </h2>
_END;
    exit();
  }
  
  // Only get to here if the user is validated
  require("secret-page.php");

?>


