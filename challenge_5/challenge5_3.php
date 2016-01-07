
<?php

  $acc_time = date("Y/m/d");

  setcookie("LastLoginDate", $acc_time);

  $lastDate = $_COOKIE["LastLoginDate"];
    echo "Welcome back!"."<br>";
    echo 'Last login date is: ' . $lastDate;
  ?>
