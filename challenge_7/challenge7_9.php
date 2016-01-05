<html>
<body>
<form action="" method="post">
ID:<input type="text" name="profilesID">
name:<input type="text" name="name">
tell:<input type="text" name="tell">
age:<input type="text" name="age">
birthday:<input type="text" name="birthday">
<input type="submit" name="exec" value="add">
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
      $sql = "insert into profiles(profilesID,name,tell,age,birthday) values(:profilesID,:name,:tel,:age,:birth)";
      $query = $pdo_obj -> prepare($sql);


      $query -> bindValue(':profilesID',$profilesID);
      $query -> bindValue(':name',$name);
      $query -> bindValue(':tel',$tell);
      $query -> bindValue(':age',$age);
      $query -> bindValue(':birth',$birthday);
      $sql_ins = "insert into profiles values('$profilesID', '$name', '$tell', '$age', '$birthday')";
      $query = $pdo_obj -> prepare($sql_ins);
      $query -> execute();
    }



 ?>
