<?php

if(isset($_POST['search'])){

	$blood_type = $_POST['blood_group'];
	$province =$_POST['province'];
	$district = $_POST['district'];
	$query = "SELECT * FROM donar WHERE blood_group='$blood_type' OR (province='$province' OR district='$district') ;";
	$search_result = filterTable($query);

}
else {
	$query = "SELECT * FROM donar";
	$search_result = filterTable($query);
}

function filterTable($query)
{

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bloodbank";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";
$filter_Result = mysqli_query($conn, $query);
return $filter_Result;


}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Donar finding</title>
	<style>
		table,th,td{
			border: 1px solid black;
			border-collapse: collapse;
			/*border-spacing: 10px;*/
		}
		th,td{
			padding: 10px;
			margin: 10px;
		}
	</style>
	</head>
<body>
	<header><?php include'style/footerhead.php' ?></header>
	<main>
<form action="donar.php" method="POST" align="center">
	<b>BLOOD TYPE : </b><select type="text" name="blood_group">
			<option value="A+">A+</option>
			<option value="A-">A-</option>
			<option value="B+">B+</option>
			<option value="B-">B-</option>
			<option value="AB+">AB+</option>
			<option value="AB-">AB-</option>
			<option value="O+">O+</option>
			<option value="O-">O-</option>
		</select>
	<b> Province : </b><select type="text" name="province">
				<option value="">All</option>
				<option value="Central Province">Central Province</option>
				<option value="Eastern Province">Eastern Province</option>
				<option value="Northern Province">Northern Province</option>
				<option value="Northern Central Province">Northern Central Province</option>
				<option value="Northern Western Province">Northern Western Province</option>
				<option value="Sabaragamuwa Province">Sabaragamuwa Province</option>
				<option value="Southern Province">Southern Province</option>
				<option value="Uva Province">Uva Province</option>
				<option value="Western Province">Western Province</option>
		</select>
	<b> DISTRICT : </b><select type="text" name="district">	
				<option value="">All</option>		
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
			</select>
	<input type="submit" name="search" value="Search">
	<br><br>
	<a href="donar.php">Refresh</a><br><br>
	<table align="center">
		<tr>
			<th>Name</th>
			<th>Province</th>
			<th>District</th>
			<th>Age</th>
			<th>Blood Type</th>
		</tr>
		<?php while ($row = mysqli_fetch_array($search_result)):?>
			<tr>
				<td><a href="send.php"><?php echo $row['name'];?></a></td>
				<td><?php echo $row['province'];?></td>
				<td><?php echo $row['district'];?></td>
				<td><?php echo $row['age'];?></td>
				<td><?php echo $row['blood_group'];?></td>
			</tr>
		<?php endwhile; ?>
	</table>
</form>
</main>
<footer> <?php include'style/footer.php';?></footer>
</body>
</html>