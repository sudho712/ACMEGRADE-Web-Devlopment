<?php
$host="localhost";
$user="root";
$pass="";
$db="ecom";
$port=3306;

$conn=new mysqli($host,$user,$pass,$db,$port);
/* mysqli_query($conn,"insert into student(name,age) values('shiv',12)"); */

$sql_result=mysqli_query($conn,"select * from student");
/* echo "<br>--------------------------------------<br>";

$sql_result=mysqli_query($conn,"select name,age from student");
print_r($sql_result);
echo "<br>--------------------------------------<br>";
mysqli_fetch_all($sql_result);
$dbrow=mysqli_fetch_all($sql_result);
print_r($dbrow); */

/* 
print_r($sql_result);

while($dbrow=mysqli_fetch_assoc($sql_result))
{
    echo "<br>";
    print_r($dbrow);
}
echo "<br><br>--------------------------------------<br>
         Successfully connected"; */
?>