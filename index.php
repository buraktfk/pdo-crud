<!DOCTYPE html>
<html>
<head>
	<title>Ekle</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
	<div class="container">
		<div class="row">
<div class="col-md-4 bg-light mt-5">
	<h3 class="text-primary text-center">PDO CRUD</h3>
	<hr style="border-top:1px dotted #ccc;" />
<form action="insert.php" method="post">
  <div class="form-group">
					<label>İsim</label>
					<input class="form-control" type="text" pattern=".{3,}" required title="En Az 3 Karakter Olmalı" name="name"/>
				</div>
				<div class="form-group">
					<label>Soyisim</label>
					<input class="form-control" type="text" pattern=".{3,}" required title="En Az 3 Karakter Olmalı" required="" name="lastname"/>
				</div>
				<div class="form-group">
					<label>Adres</label> 
					<input class="form-control" type="text" pattern=".{20,}" required title="En Az 20 Karakter Olmalı" required="" name="address"/>
				</div>
				<div class="form-group">
					<button class="btn btn-primary form-control" type="submit" name="save">Kaydet</button>
				</div>

</form>
</div>

<div class="col-md-8 mt-5">
	
	<table class="table table-bordered">
			<thead class="alert-warning">
				<tr>
					<th>Sıra</th>
					<th>İsim</th>
					<th>Soyisim</th>
					<th>Adres</th>
					<th>İşlem</th>
				</tr>
			</thead>
			<tbody class="alert-light">
				<?php

					include 'connection.php';
					$say=1;
					$list = $conn->query("SELECT * FROM person", PDO::FETCH_ASSOC);
					foreach ($list as $row) {
	
				?>
				<tr>
					<td><?php echo $say++?></td>
					<td><?php echo $row['person_name']?></td>
					<td><?php echo $row['person_lastname']?></td>
					<td><?php echo $row['person_address']?></td>
					<td><a href="edit.php?id=<?php echo $row['person_id']?>">Edit</a> | <a href="delete.php?id=<?php echo $row['person_id']?>">Delete</a></td>
				</tr>
				<?php
					}
				?>
			</tbody>
		</table>

</div>
</div>
</div>

</body>
</html>