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
$sql="create table Donation_Details (Full_Name varchar(30),Phone_Number varchar(20),Address varchar(30),Clothes_Description varchar(40))";
if(mysqli_query($conn,$sql))
{
	echo "table created successfully";
}

mysqli_close($conn);

?>