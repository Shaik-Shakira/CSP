<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="cspproject";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
 
 die("connection failed:".mysqli_connect_error());
 }
$fn=$_POST['name'];  
$mail=$_POST['email'];
$mes=$_POST['message'];  
$fn_pat='/^[a-zA-Z0-9 ]{5,30}$/'; 
$mail_pat='/^[A-Za-z0-9]+@[A-Za-z]+.[A-Za-z]{2,4}$/'; 
$flag=true; 
if(empty($fn)) { 
$flag=false; 
echo "Enter the Full name PLEASE"; 
} 
else if(empty($mail)) { 
$flag=false; 
echo "Enter the E-Mail PLEASE"; 
}
else if(empty($mes)) { 
$flag=false; 
echo "Enter the your message PLEASE"; 
}  
else if(preg_match($fn_pat,$fn)==false) { 
$flag=false; 
echo "Please Enter Full Name in Given Format"; 
} 
else if(preg_match($mail_pat,$mail)==false) { 
$flag=false; 
echo "Please Enter Mail in Given Format"; 
} 
else if($flag==true) { 
echo "Your Contact Done Successfully"; 
} 
$sql="insert into Contact_Details (Full_Name,Email,Send_message)values('$fn','$mail','$mes')";
if(mysqli_query($conn,$sql))
{
	echo "";
}
mysqli_close($conn);
?> 
