<?php
if(isset($_post['submit']))
{
$name =$_post['name'];
$email=$_post['email'];
$mobile=$_post['mobile'];
$city=$_post['city'];


$host='localhost';
$user='root';
$pass='';
$dbname='first';

$conn = mysqli_connect($host,$user,$pass,$dbname);
$sql = "insert into student (name,email,mobile,city) values('$name','$email','$mobile','$city');
mysql_query($conn,$sql);
}
?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,iniital-scale=1">
    <title>home</title>
</head>
<body>
<from action="#" method="post">
 NAME :<input type="text" name="name"><br>
 EMAIL :<input type="text" name="email"><br>
 MOBILE:<input type="text" name="mobile"><br>
CITY:<input type ="text" name="city"><br>
<input type="submit" name="submit"value="Send data">
</from>
</body>
</html>