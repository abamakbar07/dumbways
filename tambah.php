<?php 
require 'function.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah data programmer</title>
</head>
<body>
	<h1>Tambah data programmer</h1>

	<form action="" method="post">
		<ul>
			<li>
				<label for="name">Name :</label>
				<input type="text" name="name" id="name">
			</li>
			<li>
				<label for="photo">Photo :</label>
				<input type="text" name="photo" id="photo">
			</li>
			<li>
				<button type="submit" name="submit">Tambah data!</button>
			</li>
		</ul>		

	</form>

	<a href="index.php">kembali ke index.</a>

</body>
</html>