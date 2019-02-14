<?php

	include_once 'connect.php';

	$name = $_POST['name'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM donar WHERE name='$name' AND password='$password';";
	$result = $conn->query($sql);

	if (!mysqli_query($conn,$sql))
  	{
  		echo("Error description: " . mysqli_error($conn));
  	}elseif ($result->num_rows > 0) {
    // output data of each row
    	while($row = $result->fetch_assoc()) {
    		include 'nod.php';
        	//echo "<br>" . "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["blood_group"]. "<br>";
    	}
	}else {
    echo "0 results";
	}
  


?>