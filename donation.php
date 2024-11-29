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
$mob=$_POST['phone'];
$address1=$_POST['address'];
$des=$_POST['clothes_des'];  
$fn_pat='/^[a-zA-Z0-9 ]{5,30}$/'; 
$mob_pat='/^\d{10}$/'; 
$address1_pat='/^[A-Za-z0-9]{10,30}$/'; 
$des_pat='/^[[A-Za-z]{10,60}$/';
$flag=true; 
if(empty($fn)) { 
$flag=false; 
echo "Enter the Full name PLEASE"; 
} 
else if(empty($mob)) { 
$flag=false; 
echo "Enter the Mobile NumberPLEASE"; 
}
 else if(empty($address1)) { 
$flag=false; 
echo "Enter the address PLEASE"; 
}
else if(empty($des)) { 
$flag=false; 
echo "Enter the Clothes description PLEASE"; 
} 
else if(preg_match($fn_pat,$fn)==false) { 
$flag=false; 
echo "Please Enter Full Name in Given Format"; 
}  
else if(preg_match($mob_pat,$mob)==false) { 
$flag=false; 
echo "Please Enter Mobile in Given Format"; 
} 
else if($flag==true) { 
echo "<h1>Thank you for your Donation</h1>"; 
} 
$sql="insert into Donation_Details (Full_Name,Phone_Number,Address,Clothes_Description )values('$fn','$mob','$address1','$des')";
if(mysqli_query($conn,$sql))
{
	echo "";
}

mysqli_close($conn);
?> 
