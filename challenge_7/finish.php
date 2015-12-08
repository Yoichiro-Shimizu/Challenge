<?php

  $name = $_POST["name"];
  $gender = $_POST["gender"];
  $hobby = $_POST["hobby"];

  setcookie("sub", $name);
  setcookie("sub", $gender);
  setcookie("sub", $hobby);

  ?>

  <html>
  <head>
    <title>Finish</title>
  </head>
  <body>
    <p>Thanks. You can continue if you haven't finished by clicking 'back'</p>
    <p><a href="progress5_7.php">back</a></p>
  </body>
  </html>
