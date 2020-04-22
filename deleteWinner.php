<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<?php 
	require 'database.php';
	$check = deleteWinner();

	?>
</head>
<body>
	<main class="container">

	<?php 
		if ($check)
		{
	?>
			<div class="alert alert-success" role="alert">
			  Delete Successfull
			</div>
			<a href="champions.php">Return to main</a>
	<?php
		}
		else
		{
	?>
			<div class="alert alert-danger" role="alert">
			  Delete not successfull
			</div>
			<a href="champions.php">Return to main</a>
	<?php
		}

	?>

	</main>

</body>
</html>
