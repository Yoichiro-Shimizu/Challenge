<?php
  $str = "清水要一郎";
  echo ('<pre>');
  var_dump(strlen($str));
  echo ('</pre>');
  var_dump(mb_strlen($str, "UTF-8"));
 ?>
