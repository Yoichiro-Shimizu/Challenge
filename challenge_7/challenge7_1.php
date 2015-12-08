<?php
  try{
  $pdo_obj = new PDO('mysql:host=localhost;dbname=challenge_db;charset=cp932','Yoichiro','bourbon101');
}catch(PDOException $Exception){
  die('Error:'.$Exception->getMessage());
}

  $pdo_obj = null;


  $sql = "insert into profiles(profilesID,name,tell,age,birthday) values(:profilesID,:name,:tell,:age,:birthday)";
  $query = $pdo_obj->prepare($sql);
  $query -> bindValue(':profilesID',6);
  $query -> bindValue(':name','hoge');
  $query -> bindValue(':tell','000-0000-0000');
  $query -> bindValue(':age',20);
  $query -> bindValue(':birthday','1990-12-31');
  $query -> execute();
  $result-> fetch(PDO::FETCH_ASSOC)
?>
