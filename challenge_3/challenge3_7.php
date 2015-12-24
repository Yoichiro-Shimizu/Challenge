<?php
  $global_num = 3;
  function count_num(){
    static $number = 0;
    global $global_num;
    $number += 1;
    echo "Function call:$number<br>";
    echo "Result:$global_num<br>";
    $global_num *= 2;
  }

  for ($i=0;$i<20;$i++) {
    count_num();
  }

?>
