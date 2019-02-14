<?php

include_once 'connect.php';

if(isset($_POST['search'])){

}
else {
	$query = "SELECT * FROM donar";
	$search_result = filterTable($query);
}

function filterTable($query)
{

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";
$filter_Result = mysqli_query($conn, $query);
return $filter_Result;

}

?>

<tr>
			<th>Name</th>
			<th>Province</th>
			<th>District</th>
			<th>Age</th>
		</tr>
		<?php while ($row = mysqli_fetch_array($search_result)):?>
			<tr>
				<td><?php echo $row['name'];?></td>
				<td><?php echo $row['province'];?></td>
				<td><?php echo $row['district'];?></td>
				<td><?php echo $row['age'];?></td>
			</tr>
		<?php endwhile; ?>