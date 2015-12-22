<?php
  function profiles($id){
    switch ($id) {
      case 0:
        $arrayprof = array("Spam", "1990/12/31", "Heaven");
        break;
      case 1:
        $arrayprof = array("Ham", "1991/01/01", "Hell");
        break;
      case 2:
        $arrayprof = array("Egg", "1992/12/25", "Purgatory");
        break;
    }
    return $arrayprof;
  }

  $results = profiles(2);

  foreach ($results as  $key => $value) {
    echo "$value<br>";
  }
