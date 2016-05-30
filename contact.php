<?php require_once 'inc/contact-ext.php';?>
<!DOCTYPE html>
<html>
<head>
	<title>Get in touch</title>
</head>
<body>

	<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
		<ul>
			<li><input type="text" name="fname" placeholder="first name"></li>
			<li><input type="text" name="lname" placeholder="last name"></li>
			<li><input type="email" name="mail" placeholder="example@email.co.uk"></li>
			<li><input type="number" name="number" placeholder="070000000000"></li>
			<li><select name="service">
					<option>Basic </option>
					<option>E-comerce</option>
					<option>Blog</option>
					<option>other</option>
			</select></li>
		</ul>
		<button type="submit">Get in touch</button>
	</form>

</body>
</html>