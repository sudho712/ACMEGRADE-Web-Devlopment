<?php
$host="localhost";
$user="root";
$pass="";
$db="ecom";
$port=3306;

$conn=new mysqli($host,$user,$pass,$db,$port)
print_r($conn);
echo "<br> Successfully connected";`
?>