<?php
$link = myysql_connect("localhost","root","1234","test")
or die("Error!<br/>");
echo "MYSQL test Success! <br/>";
$sql = "INSERT INTO `account`(`id`,`adminname`,`password`) VALUES(\"Carla0503\",\"Mengling\",\850503Carla\")";
echo "SQL 字串: $sql <br/>";

//送出UTF unicide MYSQL 
mysqli_query($link, 'SET NAMES utf8');
mysql_query($link,$sql)
