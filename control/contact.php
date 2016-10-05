<?php
require_once 'functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if (empty($_POST['name'])) {
		$name_error = true;
	}else{ $name = clean_data($_POST['name']);}

	if (empty($_POST['email'])) {
		$email_error = true;
	}else{
		if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) {
			$email_error = true;
		}else{ $email = clean_data($_POST['email']);}
	}

	if (empty($_POST['phone'])) {
		$phone_error = true;
	}else{$phone = clean_data($_POST['phone']);}

	if (empty($_POST['website-type'])) {
		$website_type_error = true;
	}else{$website_type = clean_data($_POST['website_type']);}




}

?>