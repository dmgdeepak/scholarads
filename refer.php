<?php
$host=$_SERVER['HTTP_HOST'];
$address=$_SERVER['PHP_SELF'];
$url=$host.$address;
echo $url;
?>