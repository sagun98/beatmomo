<?php
$dbhost='localhost';
$dbuser= "root";
$dbpassword= "";
$dbname="info";


$db =new mysqli($dbhost,$dbuser,$dbpassword,$dbname);

if (!$db){

	die("Error in connection".mysql_error());
}

?>

