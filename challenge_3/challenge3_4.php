<?php

  function calicu($num,$numdefau=5,$type=false){
  $multi = $num * $numdefau;

  if ($type === false) {
    echo $multi;
  }else{
    echo $multi ** 2;
  }
  return true;
}

  if (calicu(true)){
    echo ("<br>正しく実行されました</br>");
  }else{
    echo ("<br>正しく実行されませんでした</br>");
  }
?>
