<?php
  $fp = fopen('intro.txt', 'w');
  fwrite($fp, '名前:清水要一郎'."\r\n");
  fwrite($fp, '趣味:読書、酒'."\r\n");
  fclose($fp);
 ?>
