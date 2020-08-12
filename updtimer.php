<?php
include('config.php');
include('session.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
for($i=1; $i<9; $i++){
	$start[$i] = "00:00:00";
	$stop[$i] = "00:00:00";
	$timer[$i] = '0';
	if (! empty($_POST["start".$i])) {
		$start[$i] = $_POST["start".$i];
	} 
	if (! empty($_POST["stop".$i])) {
		$stop[$i] = $_POST["stop".$i];
	}

	if(! empty($_POST["timercheck".$i])) {
		$timer[$i] = $_POST["timercheck".$i];
	}

	$query = "update switch SET start='".$start[$i]."', stop='".$stop[$i]."',
	timer=".$timer[$i]." WHERE id='".$i."'";
	$result = $db->query($query);
}
header("Location: index.php");
}
