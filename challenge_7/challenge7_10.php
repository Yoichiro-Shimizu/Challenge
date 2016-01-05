<html>
<body>
<form action="" method="post">
削除対象のID: <input type="text" name="profilesID">
<input type="submit" name="exec" value="削除">
</form>
</html>

<?php
  try {
    $pdo_obj = new PDO("mysql:host=localhost;dbname=challenge_db;charset=utf8","Yoichiro", "bourbon101");
  } catch (PDOException $e) {
    print("Error:".$e->getMessage());
    die();
  }

  if(empty($_POST['profilesID'])){
    $profilesID = null;
  }else{
    $profilesID = $_POST['profilesID'];
  }

  $sql_del = "delete from profiles where profilesID=$profilesID";
  $query = $pdo_obj -> prepare($sql_del);
  $query -> execute();
  
 ?>
