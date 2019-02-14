<?php

include_once 'include/connect.php'; 

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style/login.css">
	<style>
	body.main.form.input{
	padding: 5px;
	margin: 5px;
	}
	</style>
</head>
<body>
<header>
	<?php include'style/footerhead.php'; ?>
</header>
<main>
	<form action="include/login.php" method="POST" align="center">
			<input type="text" name="name" placeholder="Name"><br>
			<input type="password" name="password" placeholder="Password"><br>
			<input type="submit" value="Login"><br>

		<a href="sign.php">Not still an account</a>
	</form>
</main>
<footer>
	<?php include'style/footer.php';  ?>
</footer>
</body>
</html>