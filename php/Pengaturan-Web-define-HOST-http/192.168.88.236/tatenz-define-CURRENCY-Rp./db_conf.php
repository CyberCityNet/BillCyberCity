<?php

//Pengaturan Database
$server = "localhost";
$name = "root";
$password = "";
$database = "billing";


$connection = mysql_connect($server,$name,$password) or die(mysql_error());
mysql_select_db($database,$connection) or die(mysql_error());

?>
