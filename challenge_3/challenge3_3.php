<?php
  function calicu($num,$numdefau=5,$type=false){
    $multi = $num * $numdefau;
    if ($type === false) {
      echo $multi;
    }else{
      echo $multi ** 2;
    }
}
  calicu($num=10,$numdefau=5,$type=false);
 ?>
