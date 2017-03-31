<?php
session_start();
// include('def.php');  
include('sqlc.php'); //connect Db
// Check If person is already Logged in

// Get all Details 

$email=$_POST['login_email'];
$Fname=$_POST['Fname'];
$Sname=$_POST['Sname'];
$username=$Fname.' '.$Sname;
$gender=$_POST['gender'];
$pass=$_POST['pass'];
$city=$_POST['city'];
$category=$_POST['category'];
$adname=$_POST['adName'];
if($email==''||$pass=='')
{
exit;
}

if($_POST['pass']!=$_POST['pass1'])
{
die("Password And Confirm Password Are not same");
}


function add_data(&$email,&$city,&$gender,&$username,&$category,&$adname)
{
$sql="INSERT INTO ads(email,city,gender,userName,category,adname) VALUES ('$email','$city',$gender,'$username','$category','$adname')";
if(!mysql_query($sql))
echo mysql_error();
}

function checkdata($email,$adname)
{
$sql="SELECT * from ads where email='$email' and adname='$adname'";
if($qr=mysql_query($sql))
echo "done";
$t=mysql_num_rows($qr);
if($t>=1)
{
echo 'Email Id already Exists';
exit;
}
}


$sessionid=sha1(md5($email.$name.rand()));
$pass=md5($pass);
checkdata($email,$adname);
add_data($pass,$email,$city,$gender,$username,$sessionid,$category,$adname);
setsess($email,$sessionid);
?>