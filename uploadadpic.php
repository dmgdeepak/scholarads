<?php
session_start();

/*
if(!(isset($_SESSION['adname'])) )
{
echo 'Session Expired , Try Again';
Header("Location:postad.php");
exit;
}
*/

include('sqlc.php'); //connect Db

$email=$_POST['email'];
$vericode=$_POST['vericode'];
$adname=$_SESSION['adname'];
function uploadpic1($email,$vericode,$adname)
{
$target_dir = "uploads/";
$target_file = $target_dir .$email.$vericode.$adname."1.jpg";
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "File should not exceed 500kb.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg"  && $imageFileType != "jpeg" ) {
    echo "Sorry, only JPG, JPEG files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
}

function uploadpic2($email,$vericode,$adname)
{
$target_dir = "uploads/";
$target_file = $target_dir .$email.$vericode.$adname."2.jpg";
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload2"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload2"]["size"] > 500000) {
    echo "File should not exceed 500kb.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "jpeg" ) {
    echo "Sorry, only JPG, JPEG files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload2"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload2"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
}

function uploadpic3($email,$vericode,$adname)
{
$target_dir = "uploads/";
$target_file = $target_dir .$email.$vericode.$adname."3.jpg";
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload3"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload3"]["size"] > 500000) {
    echo "File should not exceed 500kb.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "jpeg" ) {
    echo "Sorry, only JPG, JPEG files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload3"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload3"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
}


function uploadpic4($email,$vericode,$adname)
{
$target_dir = "uploads/";
$target_file = $target_dir .$email.$vericode.$adname."4.jpg";
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload4"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload4"]["size"] > 500000) {
    echo "File should not exceed 500kb.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "jpeg" ) {
    echo "Sorry, only JPG, JPEG files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload4"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload4"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
}
$photourl=$email.$vericode.$adname;


function changedbrecord($email,$vericode,$adname,$photourl,$no,$descrip,$price,$specs)
{
$sql="UPDATE ads SET photourl = '$photourl' ,postadcode='$no' , description='$specs' ,moreinfo='$descrip' , price='$price' WHERE email='$email' AND postadcode='$vericode' AND adname='$adname'";
if(!mysql_query($sql))
{
echo mysql_error();
exit;
}
Header("Location:postadstep3.php");

}

$no=rand();
$descrip=$_POST['descrip'];
$specs=$_POST['specs'];
$price=$_POST['user_price'];

uploadpic1($email,$vericode,$adname);
uploadpic2($email,$vericode,$adname);
uploadpic3($email,$vericode,$adname);
uploadpic4($email,$vericode,$adname);
changedbrecord($email,$vericode,$adname,$photourl,$no,$descrip,$price,$specs);
session_destroy();
?>