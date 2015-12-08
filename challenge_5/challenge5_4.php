<?php
  session_start();

  $acc_time = date("Y/m/d");


  $_SESSION['messe'] = 'Welcome back!'."<br>".'Last login date is: '.$acc_time;
  echo $_SESSION['messe'];
