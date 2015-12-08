<?php
  try {
    $pdo_obj = new PDO('mysql:host=localhost;dbname=challenge_db;charset=cp932','Yoichiro','bourbon101');
  } catch (PDOException $e) {
    die('Error:'.$e->getMessage());
  }
    $pdo_obj ->query('SET NAMES utf8');
    $sql_upd = "update profiles set name='松岡修造',age=48,birthday='1967-11-06' where profilesID=1";
    $query = $pdo_obj ->prepare($sql_upd);
    $query -> execute();

    $sql = "select * from profiles";
    $query = $pdo_obj ->prepare($sql);
    $query -> execute();

      foreach ($pdo_obj->query($sql) as $row ) {
        print 'ID'.$row['profilesID'].'<br>';
        print 'name'.$row['name'].'<br>';
        print 'tell'.$row['tell'].'<br>';
        print 'age'.$row['age'].'<br>';
        print 'birthday'.$row['birthday'].'<br>';
      }

  $pdo_obj = null;

?>
