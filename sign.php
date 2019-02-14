<?php

	include_once 'include/connect.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>Donar Sign</title>
	<link rel="stylesheet" type="text/css" href="style/login.css">
</head>
<body>
<header>
	<?php include'style/footerhead.php'; ?>
</header>
<main>
	<form action="include/sign.php" method="POST" align="center">
		
		<input type="text" name="name" placeholder="Name" required><br>
		<input type="email" name="email" placeholder="Email" required><br>
		<select type="text" name="province" required>
				<option value="Central Province">Central Province</option>
				<option value="Eastern Province">Eastern Province</option>
				<option value="Northern Province">Northern Province</option>
				<option value="Northern Central Province">Northern Central Province</option>
				<option value="Northern Western Province">Northern Western Province</option>
				<option value="Sabaragamuwa Province">Sabaragamuwa Province</option>
				<option value="Southern Province">Southern Province</option>
				<option value="Uva Province">Uva Province</option>
				<option value="Western Province">Western Province</option>
		</select><br>
		<select type="text" name="district" required>			
				<option value="Ampara">Ampara</option>
				<option value="Anuradhapura">Anuradhapura</option>
				<option value="Avissawella">Avissawella</option>
				<option value="Badulla">Badulla</option>
				<option value="Batticaloa">Batticaloa</option>
				<option value="Collombo">Collombo</option>
				<option value="Dambulla">Dambulla</option>
				<option value="Galle">Galle</option>
				<option value="Gampaha">Gampaha</option>
				<option value="Hambanthota">Hambanthota</option>
				<option value="Jaffna">Jaffna</option>
				<option value="Kaluthara">Kaluthara</option>
				<option value="Kandy">Kandy</option>
				<option value="Kegalle">Kegalle</option>
				<option value="Kurunegala">Kurunegala</option>
				<option value="Mannar">Mannar</option>
				<option value="Matale">Matale</option>
				<option value="Matara">Matara</option>
				<option value="Monragala">Monragala</option>
				<option value="Negombo">Negombo</option>
				<option value="Nuwara-Eliya">Nuwara-Eliya</option>
				<option value="Panadura">Panadura</option>
				<option value="Polonnaruwa">Polonnaruwa</option>
				<option value="Puttalam">Puttalam</option>
				<option value="Rathnapura">Rathnapura</option>
				<option value="Trincomalee">Trincomalee</option>
				<option value="Vavuniya">Vavuniya</option>
			</select><br> 
		<input type="text" name="age" placeholder="Age" required><br>
		Blood Group
		<input type="radio" name="blood_group" value="A+" checked>A+
		<input type="radio" name="blood_group" value="A-">A-
		<input type="radio" name="blood_group" value="B+">B+
		<input type="radio" name="blood_group" value="B-">B-
		<input type="radio" name="blood_group" value="AB+">AB+
		<input type="radio" name="blood_group" value="AB-">AB-
		<input type="radio" name="blood_group" value="O-">O-
		<input type="radio" name="blood_group" value="O+">O+
		<br>
		<input type="date" name="last_day" required><br>
		<input type="text" name="contact" placeholder="Contact" required><br>
		<input type="radio" name="gender" value="male" checked>Male
		<input type="radio" name="gender" value="female">Female
		<br>
		<input type="password" name="password" placeholder="Password" required><br>
		<input type="submit" name="submit" value="Submit">
		<!-- <input type="button" onclick="alert('Hello World!')" value="Click Me!"> -->
	
</form>
</main>
<footer>
	<?php include'style/footer.php';  ?>
</footer>
</body>
</html>