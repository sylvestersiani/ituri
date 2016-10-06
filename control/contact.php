<?php
require_once 'functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if (empty($_POST['name'])) {
		$name_error = true;
	}else{ $name = clean_data($_POST['name']);}

	if (empty($_POST['email'])) {
		$email_error = 'Don\'t forget your email address';
	}else{
		if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
			$email_error = 'Enter the correct email adrress';
		}
		 $email = clean_data($_POST['email']);
	}

	if (empty($_POST['phone'])) {
		$phone_error = true;
	}else{$phone = clean_data($_POST['phone']);}

	if (empty($_POST['website_type'])) {
		$website_type_error = true;
	}else{$website_type = $_POST['website_type'];}


	if (!empty($name) && 
		!empty($email) && 
		!empty($phone) && 
		!empty($website_type)) {
		$data_input = array('Name' => $name, 'Email' => $email , 'Phone' => $phone , 'Website_type' => $website_type );

			$to = 'sylvestersiani93@googlemail.com';
			$headers = 'From '. $email . "\r\n";
			$from = $email;
			$subject = 'IMPORTANT! website enquiry';
			$body = 'Website enquiry from' . $name .  ",\r\n";
			$body .= 'We are interested in having a ' . $website_type . ' created' . "\r\n";
			$body .= 'You can contact us on ' . $phone . "\r\n";
			$body .= 'Best' . "\r\n";
			$body .= $name;

			if(mail($to, $subject, $body, $headers)){
				$email_sent = true;
			}else{
				$email_sent = null; 
			}
			

	}

}

?>