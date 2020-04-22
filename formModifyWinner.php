


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
	<h1>Form Modify Year or Winner</h1>
<form method="POST" action="editWinner.php">
	  <div class="form-group">
	    <label for="year">Year</label>
	    <input type="text" class="form-control" id="year" name="yearPost" value ="<?php echo $year; ?>">
	  </div>
	  <div class="form-group">
	    <label for="winner">Winner</label>
	    <input type="text" class="form-control" id="winner1" name="championPost" value="<?php echo $winner['CHAMPION']; ?>">
	    <input type="hidden" class="form-control" id="yearGet" name="year" value ="<?php echo $year; ?>">
	  </div>
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>

</main>
</body>
</html>