<?php
$dbhost = "localhost";
$dbname = "persons";
$dbusername = "root";
$dbpassword = "";

try {
	$conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbusername, $dbpassword);
} 

catch (Exception $e) {
	echo $e->getMessage();
}




?>