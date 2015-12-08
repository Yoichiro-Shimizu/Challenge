<?php
  try {
    $pdo_obj = new PDO('mysql:host=localhost;dbname=challenge_db;charset=cp932','Yoichiro','bourbon101');
  } catch (PDOException $e) {
    die('Error:'.$e->getMessage());
  }
    $pdo_obj ->query('SET NAMES utf8');
    $sql_del = "delete from profiles where profilesID=6";
    $query = $pdo_obj ->prepare($sql_del);
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
