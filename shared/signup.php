<?php
$host="localhost";
$user="root";
$pass="";
$db="ecom";
$port=3306;

$conn=new mysqli($host,$user,$pass,$db,$port);
print_r($_POST);
mysqli_query($conn,"insert into user(username,password,usertype) VALUES('$_POST[username]','$_POST[password]','$_POST[usertype]')");
/* header("location:login.html"); */

?>