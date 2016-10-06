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

	function selected_option($set_var, $input_name){
	if (isset($set_var) && $set_var == $input_name) {
		return 'selected="selected"';
	}
}


?>