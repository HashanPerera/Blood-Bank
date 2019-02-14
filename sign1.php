<?php

	include_once 'connect.php';

	$name = $_POST['name'];
	$email = $_POST['email'];
	$province = $_POST['province'];
	$district = $_POST['district'];
	$age = $_POST['age'];
	$blood_group = $_POST['blood_group'];
	$last_day = $_POST['last_day'];
	$contact = $_POST['contact'];
	$gender = $_POST['gender'];
	$password = $_POST['password'];

	$sql = "INSERT INTO patient (name, email, province, district, age, blood_group, last_day, contact, gender, password) VALUES ('$name','$email', '$province', '$district', '$age', '$blood_group', '$last_day', '$contact', '$gender', '$password');";

	if (!mysqli_query($conn,$sql))
  	{
  	echo("Error description: " . mysqli_error($conn));
  	}

	header("Location: ../index.php?sign=success");

?>