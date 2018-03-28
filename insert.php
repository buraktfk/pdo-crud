<?php 
include("connection.php");
include("safety.php");

if (isset($_POST["save"])) {
	try{
		$q= $conn->prepare("INSERT INTO person (person_name,person_lastname,person_address) VALUES (:name,:lastname,:address) ");
		$q->execute(array(
    "name" =>(secure($_POST['name'])),
    "lastname" =>(secure($_POST['lastname'])),
    "address" => (secure($_POST['address']))
		));
}

catch(PDOException $e){
			echo $e->getMessage();
		}

		$conn = null;
		header('location:index.php');
}

?>