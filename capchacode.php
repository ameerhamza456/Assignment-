<?php
session_start();

$str= md5(microtime());

$str= substr($str,0,6);

$_SESSION['capcha']= $str;

$img= imagecreate(100,50);

imagecolorallocate ($img,250,250,250);

$textcolor= imagecolorallocate($img,0,0,0);

imagestring($img,20,20,15,$str,$textcolor);

header('content-type:image/jpeg');

imagejpeg($img);


?>