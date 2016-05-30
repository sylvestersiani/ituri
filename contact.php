<!DOCTYPE html>
<html>
<head>
	<title>Get in touch</title>
</head>
<body>

	<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
		<ul>
			<li><input type="text" name="fname"></li>
			<li><input type="text" name="lname"></li>
			<li><input type="email" name="mail"></li>
			<li><input type="number" name="number"></li>
			<li><select>
					<option>E-comerce</option>
					<option>Basic</option>
					<option>Blog</option>
					<option>other</option>
			</select></li>
		</ul>
	</form>

</body>
</html>