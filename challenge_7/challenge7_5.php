<?php
  try{
  $pdo_obj = 'mysql:dbname=challenge_db;host=localhost';
  $user = 'Yoichiro';
  $password = 'bourbon101';
  $pdo_def = new PDO($pdo_obj, $user, $password);

    if ($pdo_def == null){
      die('Error<br>');
    }else{
      print ("Begin.<br>");
    }
  $pdo_def->query('SET NAMES utf8');
  $sql = "select * from profiles where name like '%実'";
  $query = $pdo_def->prepare($sql);
  $query -> execute();

    while ($row = $query->fetch(PDO::FETCH_OBJ)) {
      print 'ID'.$row -> profilesID."<br>";
      print 'name'.$row -> name."<br>";
      print 'tell'.$row -> tell."<br>";
      print 'age'.$row -> age."<br>";
      print 'birthday'.$row -> birthday."<br>";
    }

  }catch (PDOException $messe){
    die('Error:'.$messe->getMessage());

}

$pdo_def = null;

?>
