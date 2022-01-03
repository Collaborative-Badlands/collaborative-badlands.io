<?php

$host="localhost:3306";
$dbname = "collaborativebadlands_db";
$username = "root";
$password = "0000";

myysql_connect("$host","$username","$password")or die("cannot connect");
mysql_query("SET NAMES 'utf-8'");
mysql_select_db("$dn_name")or die("cannot select DB");

error_reporting(0);