<html>
<head>
<title>条件</title>
</head>
<body>
<p>
<?php
  $var = 1;

  if($var == 1){
    print "１です！";
  }elseif ($var == 2) {
  print "プログラミングキャンプ";
}elseif ($var == 'a') {
  print "文字です";
}else{
  print "その他です";
}

 ?>
</body>
</html>
