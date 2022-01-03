<?php

$conn ="";

try{
    $_servername = "localhost:3306";
    $dbname = "collaborativebadlands_db";
    $username = "root";
    $password = "";

    $conn = new PDO{
        "mysql:host =$servename; dbname=loginPage",
        $username,$password
    };

$conn->setAttribute(PDO::ATTER_ERRMODE,
                    PDO::ERRMODE_EXCEPTION);
catch(PDOException $e){
   echo "Connection failed: " . $e->getMessage();
}


}