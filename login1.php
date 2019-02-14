<?php

include_once 'include/connect.php'; 

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style/login.css">
</head>
<body>
<header>
	<?php include'style/footerhead.php'; ?>
</header>
<main>
	<form action="include/login1.php" method="POST" align="center">
		<input type="text" name="name" placeholder="Name"><br>
		<input type="password" name="password" placeholder="Password"><br>
		<input type="submit" value="Login"><br>

		<a href="sign1.php">Not still an account</a>
	</form>
</main>
<footer>
	<?php include'style/footer.php';  ?>
</footer>
</body>
</html>