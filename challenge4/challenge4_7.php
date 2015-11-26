<?php
  $str = "きょUはぴIえIちぴIのくみこみかんすUのがくしゅUをしてIます";
  $tar_repl = array("U", "I");
  $res = array("う", "い");
  $str = str_replace($tar_repl, $res, $str);
  print $str;
 ?>
