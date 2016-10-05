<?php
	function clean_data($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	function placeholder_text($data){
		echo  $data ;
	}

	function value_holder($data){
		return isset($data)? print $data : '';
	}


?>