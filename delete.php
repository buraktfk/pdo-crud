<?php
	if(ISSET($_GET['id'])){
		require_once 'connection.php';
		$id = $_GET['id'];
		if($sil=$conn->exec("DELETE FROM person WHERE person_id = $id")){

echo "Silindi";
}
else{
	echo "Silinemedi !";
}
		header('location:index.php');
	}
?>