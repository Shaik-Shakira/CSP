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
$fn=$_POST['t1'];  
$mail=$_POST['t2'];
$mob=$_POST['t3'];  
$avail=$_POST['t4'];
$fn_pat='/^[a-zA-Z0-9 ]{5,30}$/'; 
$mob_pat='/^\d{10}$/'; 
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
else if(empty($mob)) { 
$flag=false; 
echo "Enter the Mobile NumberPLEASE"; 
}  
else if(preg_match($fn_pat,$fn)==false) { 
$flag=false; 
echo "Please Enter Full Name in Given Format"; 
} 
else if(preg_match($mail_pat,$mail)==false) { 
$flag=false; 
echo "Please Enter Mail in Given Format"; 
} 
else if(preg_match($mob_pat,$mob)==false) { 
$flag=false; 
echo "Please Enter Mobile in Given Format"; 
} 
else if($flag==true) { 
echo "Thank you for your Cooperation with Us"; 
} 
$sql="insert into Volunteer_Details (Full_Name,Email,Phone_Number,Available_dates)values('$fn','$mail','$mob','$avail')";
if(mysqli_query($conn,$sql))
{
	echo "";
}
mysqli_close($conn);
?> 
