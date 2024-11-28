<?php
$servername="localhost:3306";
$username="root";
$password="";
$dbname="cspproject";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
 
 die("connection failed:".mysqli_connect_error());
 }
$sql="create table Contact_Details (Full_Name varchar(30),Email varchar(20),Send_message varchar(30))";
if(mysqli_query($conn,$sql))
{
	echo "";
}

mysqli_close($conn);

?>