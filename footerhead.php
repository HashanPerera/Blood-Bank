<!DOCTYPE html>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<style>


		nav ul span{
		overflow: hidden;
		padding: 20px 16px;
		display: inline-block;
		font-size: 20px;
		float: right;
		 cursor: pointer;

		}
		nav ul span a{
		display: block;
		color: white;
		text-decoration: none;
		}

		.dropdown {
	    	position: relative;
	    	display: inline-block;
	    	float: right;
	    	margin-right: 5px;
		}

		.dropdown-content > a {
			color:#7a7a52;
			text-decoration: none;
			margin: 10px;
		}

		.dropdown-content {
		margin-top: 50px;
	    display: none;
	    position: absolute;
	    background-color: #f9f9f9;
	    min-width: 70px;
	    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	    /*padding: 12px 16px;*/
	    padding: 12px;
		}

		.dropdown:hover .dropdown-content {
	    display: block;
		}

	</style>
</head>
<body>

<header></header>

<div class="container">
<nav>
	<ul>
		<li><a class="active" href="index.php">Home</a></li>
		<li><a href="about.php">About Us</a></li>
		<li><a href="contacts.php">Contact Us</a></li>
		<li><a href="camps.php">Blood Donate Camps</a></li>
		<li><a href="donar.php"></a></li>
		
			<div class="dropdown">
			<span style="float: right;"><a href="">Sign Up</a></span>
			<div class="dropdown-content">
    	  	<a href="sign.php">Donar</a><br><br>
    	  	<a href="Sign1.php">Reciever</a>
    	  	</div>
			</div>

			<div class="dropdown">
			<span style="float: right;"><a href="">Login</a></span>
			<div class="dropdown-content">
    	  	<a href="login.php">Donar</a><br><br>
    	  	<a href="login1.php">Reciever</a>
    	  	</div>
			</div>
		
		<!--<li style="float: right;"><a href="login.php">Login</a></li>
 		<div class="dropdown">
  <span>Mouse over me</span>
  <div class="dropdown-content">
    <a href="">Hello World!</a>
  </div>
</div> -->
	</ul>
</nav>
</div>	


</body>

</html> 

<!-- <?php
echo "<p>Copyright &copy; 1999-" . date("Y") . " W3Schools.com</p>";
?> -->