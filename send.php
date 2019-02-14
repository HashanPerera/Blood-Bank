<?php

	include 'include/connect.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>Sending Email</title>
	<style>
		label,input{
			margin: 10px;
		}
		.text{
			height: 250px;
			width: 500px;
			align-items: top;

		}
	</style>
</head>
<body>
<form>
	<label>Send To:
		<input type="email" name="email">
	</label><br>
	<label>Message:
		<input type="text" name="text" class="text">
	</label><br>
	<input type="submit" name="send" value="Send">
</form>
</body>
</html>