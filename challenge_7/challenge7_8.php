<html>
<body>
<form action = "" method="post">
名前：<input type="text" name="nmser">

<input type="submit" name="exec" value="search">
</form>
</body>
</html>
  <?php
    try{
      $pdo_obj = new PDO("mysql:host=localhost;dbname=challenge_db;charset=utf8","Yoichiro", "bourbon101");
    }catch(PDOException $e){
        print("Error:".$e->getMessage());
        die();
    }

      if(empty($_POST['nmser'])){
        $searchname = null;
      }else {
        $searchname = $_POST['nmser'];
      }

      $searchobj = "%{$searchname}%";
      $sql_obj = "select * from profiles where name like '$searchobj'";
      $query = $pdo_obj -> prepare($sql_obj);
      $query -> execute();
      if($searchname == null){
       }else{
         while($row = $query->fetch(PDO::FETCH_OBJ)){
            print 'ID'.$row -> profilesID."<br>";
            print 'name'.$row -> name."<br>";
            print 'tell'.$row -> tell."<br>";
            print 'age'.$row -> age."<br>";
            print 'birthday'.$row -> birthday."<br>";
        }
      }

    $pdo_obj = null;
   ?>
