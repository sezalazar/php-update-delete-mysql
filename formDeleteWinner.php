
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<?php 
	require 'database.php';
	$winner = listWinnerByYear();
	$year = $_GET['year'];
	?>
</head>
<body>
<main class="container">
	<h1>Form Delete</h1>
<form method="POST" action="deleteWinner.php">
		<br><br>
	    Year: <?php echo $year; ?>
	    Winner: <?php echo $winner['CHAMPION']; ?>
	    <br><br>
	   <input type="hidden" class="form-control" id="yearGet" name="year" value ="<?php echo $year; ?>">
	  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</main>
</body>
</html>