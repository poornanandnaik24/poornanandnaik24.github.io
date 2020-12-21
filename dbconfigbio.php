<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "bio";
$con=new mysqli($dbhost,$dbuser,$dbpass,$dbname) or die('cannot connect to the server'); 
//mysql_select_db($dbname,$con) or die('database selection problem');
?>