<?php
  try{
    $pdo_obj = 'mysql:dbname=challenge_db;host=localhost';
    $user = 'Yoichiro';
    $password = 'bourbon101';
    $pdo_def = new PDO($pdo_obj, $user, $password);

    if ($pdo_def == null){
        die('Error<br>');
    }else{
        print "Start"."<br>";
    }
    $pdo_def->query('SET NAMES utf8');
    $sql = "insert into profiles(profilesID,name,tell,age,birthday) values(:profilesID,:name,:tell,:age,:birthday)";
    $query = $pdo_def->prepare($sql);
    $query -> bindValue(':profilesID',6);
    $query -> bindValue(':name','hoge');
    $query -> bindValue(':tell','000-0000-0000');
    $query -> bindValue(':age',20);
    $query -> bindValue(':birthday','1990-12-31');
    $query -> execute();

} catch (PDOException $messe){
    print('Error:'.$messe->getMessage());
    die();
}

$pdo_def = null;

?>
