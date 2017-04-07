<?php 

$host = "localhost";
$mysql_username = "root";
$mysql_password = "";
$db_name = "web_applications2";

$con = mysqli_connect($host, $mysql_username, $mysql_password, $db_name);

if(mysqli_connect_errno())
{
	echo "Failed connection";
	echo mysqli_connect_error();
}


 ?>