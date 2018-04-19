<?php  
$host="116.118.229.157";  
$db_user="root";  
$db_pass="";  
$db_name="commentDB";  
$timezone="Asia/Tokyo";  
  
$link=mysqli_connect($host,$db_user,$db_pass);
mysqli_select_db($link,$db_name);  
mysqli_query($link,"SET names UTF8");
  
header("Content-Type: text/html; charset=utf-8");//フォーマート  
date_default_timezone_set($timezone); //タイムゾーン
