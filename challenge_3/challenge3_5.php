<?php
  function his_profile(){
    $id = 0;
    $name = "Spam";
    $birthday = "1990/12/31";
    $address = "0";
    $arrayprof = array($id, $name, $birthday, $address);
    return $arrayprof;
  }
  $results = his_profile();

  foreach ($results as $key => $value){
    if (0 == strcmp($value, 0) && is_int($value)){//$idを整数と仮定する
      continue;
    }
    echo ("$value<br>");
  }
?>
