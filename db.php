<?php
session_start();
$_SESSION['Id']=(int)1
$host_name='localhost';
$user_name='root';
$password_name='';
$database='hotel_comments';
mysql_connect($host_name,$user_name,$database);
ysql_select_db($database);
?>
