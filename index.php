<?php 
require 'function.php';
$user = ambildata("SELECT * FROM user_tb");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<h1>DW Employee</h1>

<div class="container">

	<div class="row">
		<div class="col-sm-12">

			<form action="" method="post" style="display:flex">
			<div class="col-sm-3">
				  <input type="text"
					 class="form-control" name="photo" id="photo" placeholder="Attache">
			</div>
			
			<div class="col-sm-6">
				  <input type="text"
					 class="form-control" name="name" id="name" placeholder="Input Name Programmer">
			</div>

			<div class="col-sm-3">
					<button class="btn btn-primary" type="submit" name="submit" href="joss.php">Add Character</button>
			</div>
			</form>

		</div>
	</div>
<?php $i = 1; foreach ($user as $row) : {
		# code...
	} ?>
	<div class="row">
		<div class="container-fluid col-sm-12">

			<div class="row pt-4 bg-secondary text-white" style="margin: 5px; padding-bottom: 8px;">

				<div class="col-sm-3">
					<img src="asset/img/<?= $row["photo"] ?>" alt="" width="100%">
				</div>

				<div class="col-sm-9">

					<div class="row">
						<div class="col-sm-8">
						<p><?= $row["name"] ?></p>
						</div>
						<div class="col-sm-4">
							<a href="hapus.php?id=<?= $row["id"]; ?>"></a><input name="" id="" class="btn btn-primary" type="button" value="Edit"></a>
							<a href="hapus.php?id=<?= $row["id"]; ?>"><input name="" id="" class="btn btn-primary" type="button" value="X"></a>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-12">
						<p><?= $row["skill"] ?></p>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-8">
							<input type="text"
							class="form-control" name="skill" id="skill" aria-describedby="helpId" placeholder="Input Skill">
						</div>
						<div class="col-sm-4">
							<form action="" method="post" style="display:flex"><button class="btn btn-primary" type="submit" name="submit">Add Skill</button></form>
						</div>
					</div>

				</div>


			</div>

		</div>
	</div>
<?php $i++; endforeach; ?>

</div>

<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->

</body>
</html>