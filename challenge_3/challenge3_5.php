<?php
  function his_profile(){
    $id = 0;
    $name = "Spam";
    $birthday = "1990/12/31";
    $address = "Heaven";
    $arrayprof = array($id, $name, $birthday, $address);
    return $arrayprof;
  }
  $results = his_profile();

  foreach ($results as $key => $value){
    if (0 == strcmp($value, 0)){
      continue;
    }
    echo ("$value<br>");
  }
?>
