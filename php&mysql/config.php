<?php
$hostname="localhost";
$user="root";
$password="";
$db="quanly_ban_sua";
$conn=new mysqli($hostname,$user,$password,$db);
if($conn->connect_error) echo "Connection Failed: ".$conn->connect_error;
?>