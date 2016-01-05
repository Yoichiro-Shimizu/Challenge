<html>
<body>
<form action="" method="post">
更新する情報が含まれたID:<input type="text" name="profilesID">
name:<input type="text" name="name">
tell:<input type="text" name="tell">
age:<input type="text" name="age">
birthday:<input type="text" name="birthday">
<input type="submit" name="exec" value="update">
</form>
</body>
</html>

<?php
try{
  $pdo_obj = new PDO("mysql:host=localhost;dbname=challenge_db;charset=utf8", "Yoichiro", "bourbon101");
}catch(PDOException $e){
  print("Error:".$e->getMessage());
  die();
}

  if(empty($_POST['profilesID']) || empty($_POST['name']) || empty($_POST['tell']) || empty($_POST['birthday'])){
    $profilesID = null;
    $name = null;
    $tell = null;
    $age = null;
    $birthday = null;
  }else{
    $profilesID = $_POST['profilesID'];
    $name = $_POST['name'];
    $tell = $_POST['tell'];
    $age = $_POST['age'];
    $birthday = $_POST['birthday'];

    $sql_upd = "update profiles set name=:name,tell=:tell,age=:age,birthday=:birthday where profilesID=:profilesID";
    $query = $pdo_obj -> prepare($sql_upd);
    $query -> bindValue(':profilesID',$profilesID);
    $query -> bindValue(':name',$name);
    $query -> bindValue(':tell',$tell);
    $query -> bindValue(':age',$age);
    $query -> bindValue(':birthday',$birthday);
    $query -> execute();
  }
