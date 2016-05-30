<?php
include 'functions.php';



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
	$lname = $_POST['lname'];
	$mail = $_POST['mail'];
	$num = $_POST['number'];
	$service = $_POST['service'];

	if (!empty($fname)) {
		$fname = clean_data($_POST['fname']);
	}

}

?>