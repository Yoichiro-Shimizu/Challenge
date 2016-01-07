<?php

    if (isset($_COOKIE["LastLogin"]) && isset($_COOKIE["visited"])){
        $lastDate = $_COOKIE["LastLogin"];
        $lastDate = date("Y/m/d");
        $count = $_COOKIE["visited"] + 1;
        echo "Last: $lastDate"."<br>";
        echo "Counter: $count"."<br>";
    }else{
        $lastDate = "First";
        $count = 1;
        echo "Last: $lastDate"."<br>";
        echo "Counter: $count"."<br>";
    }

    $login = setcookie("LastLogin",$lastDate);
    $flag = setcookie("visited", $count);

?>
