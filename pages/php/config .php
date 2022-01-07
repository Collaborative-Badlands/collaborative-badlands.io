<?php

$host="localhost:3306";
$dbname = "collaborativebadlands_db";
$username = "root";
$password = "0000";

//Create connection
$conn = new mysqli_($host,$dbname,$username,$password);

//Check connection
if ($conn->connect_error){
    die("Connection failed". $conn ->connect_error);
    
}

echo "Connected Successfully";
?>