<?php
  $sta1 = mktime(0, 0, 0, 1, 1, 2015);
  $sta2 = mktime(23, 59, 59, 12, 31, 2015);
  $stasub = $sta2 - $sta1;
  print $stasub;
?>
