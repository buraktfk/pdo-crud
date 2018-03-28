<?php
	require_once 'connection.php';
	require_once 'safety.php';
	if(ISSET($_POST['update'])){
		try{
			$id = $_GET['id'];
			$person_name =(secure($_POST['person_name']));
			$person_lastname = (secure($_POST['person_lastname']));
			$person_address = (secure($_POST['person_address']));
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "UPDATE `person`SET `person_name` = '$person_name', `person_lastname` = '$person_lastname', `person_address` = '$person_address' WHERE `person_id` = '$id'";
			$conn->exec($sql);
		}catch(PDOException $e){
			echo $e->getMessage();
		}
		
		$conn = null;
		header('location:index.php');
	}
?>