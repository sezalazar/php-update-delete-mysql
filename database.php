<?php 

// Parameters: Host, User, Pass, Database Name

function connect(){

$link =  mysqli_connect('localhost', 'youtube', 'uqgdk25xCalNScWp', 'worldcupchampions');

return $link;

}

function listChampions(){

$link = connect();

$sql = "select year, champion from champions order by year";

$result = mysqli_query($link, $sql);

return $result;

}


function addChampion(){

$year = $_POST['yearpost'];
$champ = $_POST['championpost'];

$link = connect();

$sql = "INSERT INTO CHAMPIONS (YEAR, CHAMPION) VALUES('" . $year  . "' , '" . $champ . "'  )";

$result = mysqli_query($link, $sql);

return $result;

}

function listWinnerByYear(){

	$year = $_GET['year'];

	$link = connect();

	$sql = "SELECT CHAMPION FROM CHAMPIONS WHERE YEAR = '" . $year . "'    ";

	$result = mysqli_query($link, $sql);

	$winner = mysqli_fetch_assoc($result);

	return $winner;
}

function editWinner(){

	$year = $_POST['year'];

	$yearPost = $_POST['yearPost'];

	$championPost = $_POST['championPost'];

	$link = connect();

	$sql = "UPDATE CHAMPIONS SET YEAR = '" . $yearPost .  "', CHAMPION = '" . $championPost . "'  WHERE YEAR = '" . $year ."'   ";

	$result = mysqli_query($link, $sql);

	return $result;
}

function deleteWinner(){

	$year = $_POST['year'];

	$link = connect();

	$sql = "DELETE FROM CHAMPIONS WHERE YEAR = '" . $year . "'     ";

	$result = mysqli_query($link, $sql);

	return $result;

}

?>