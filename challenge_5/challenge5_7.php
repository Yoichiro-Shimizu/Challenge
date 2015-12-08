<html>
  <head>
    <title>7</title>
  </head>
  <body>
  <?php
  if(isset($_COOKIE['sub'])){
    $name = $_COOKIE["name"];
    $gender = $_COOKIE["gender"];
    $hobby = $_COOKIE["hobby"];
  }else{
    $name = "";
    $gender = "";
    $hobby = "";
  }
?>

    <form method="post" action="finish.php">

    Name:<input type="text" name="name">

    Gender:<input type="radio" name="gender" value="male">gentleman
    <input type="radio" name="gender" value="female">lady

    Your hobby:<textarea name="hobby"></textarea>

    <input type="submit" name="btnsubmit" value="Submit">

  </form>
  </body>
</html>
