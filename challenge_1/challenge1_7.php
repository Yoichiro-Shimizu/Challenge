<?php
  //$sugoods = $_GET['sugoods'];
  //$fresh = $_GET['fresh'];
  //$others = $_GET['others'];


  $goods = array
  (1 => '雑貨','生鮮食品','その他');

  print_r($goods);
?>
<?php
  const LINE_BREAK = '<br>';

  $sum = $_GET['sum'];


  if($sum >= 3000 && $sum <5000){
    $price = $sum / 3;
    $point = $sum * 0.04;
 }

  elseif($sum >= 5000){
   $price = $sum / 3;
   $point = $sum * 0.05;

 }
  else{
   $price = $sum / 3;
   $point = 'No point';
 }
?>

<html>

<head>
<title>計算</title>
</head>

<body>
<h1>処理</h1>

<?php echo 'Price:'.$price; echo LINE_BREAK.'Point:'.$point;?>

</body>

</html>
