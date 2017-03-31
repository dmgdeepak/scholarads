<?php
session_start();
// include('def.php');  
include('sqlc.php'); //connect Db


// Get all Details 

$email=$_POST['user_email'];
$name=$_POST['user_name'];
$gender=$_POST['gender'];
$city=$_POST['city'];
$category=$_POST['Category'];
$adname=$_POST['ad_title'];
$number=$_POST['user_phone'];
$date=date("d/m/y");
$duration=$_POST['ad_duration'];
$location=$_POST['com_location'];

if($adname==''||$email=='')
{
exit;
}


if(!is_numeric($number))
{
echo "<h1>Phone No. is not Correct</h1>";
exit;
}

//phone no. validation

$le=strlen($number);
if($le!=10)
{
echo 'Mobile number should be of 10 characters';
exit;
}

if(!is_numeric($duration))
{
echo "<h1>Duration should be in Numbers</h1>";
exit;
}


function add_data(&$email,&$city,&$gender,&$category,&$adname,&$name,&$number,&$date,&$processcode,&$duration,&$location)
{
$sql="INSERT INTO ads(email,city,gender,category,adname,username,mobile,date,postadcode,usedduration,location) VALUES ('$email','$city','$gender','$category','$adname','$name','$number','$date','$processcode','$duration','$location')";

if(!mysql_query($sql))
{
echo mysql_error();
exit;
}
Header("Location:postadstep2.php?data=$processcode &email=$email");
$_SESSION['adname']=$adname;
}

function checkdata($email,$adname)
{
$sql="SELECT * from ads where email='$email' and adname='$adname'";
if($qr=mysql_query($sql))
echo "done";
$t=mysql_num_rows($qr);
if($t>=1)
{
echo 'You Have already POsted The same AD';
exit;
}
}

$processcode=rand();
checkdata($email,$adname);
add_data($email,$city,$gender,$category,$adname,$name,$number,$date,$processcode,$duration,$location);

?>