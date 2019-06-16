<?php

include 'conn.php';

if(isset($_POST['submit'])){
  
 $driver_id = $_POST['driver_id'];
 $name = $_POST['name'];
 $address = $_POST['address'];
 $q = " INSERT INTO `person`(`driver_id`, `name`, `address`) VALUES ('$driver_id','$name','$address')";

  $query = mysqli_query($con,$q);
}
else{
  echo'error!';
}

?>

<html>
<head>
    <title> Add Driver 	</title>
    <link rel="stylesheet" type="text/css" href="basic.css">   
</head>
  
	<body>
	<div id="container">
	
	<header>

	<h1 class='head'>A.B.C. Insurance  co. Ltd.</h1>
	<h2>      Car & Bike Insurance Details</h2>
	
	</header>
	<div id ="nav">
	<ul>
	<li><a href="driver.php">Driver Details</a></li>
	<li><a href="car.php">Car Details</a></li>
	
	<li><a href="accident.php">Accident Info </a></li>
	<li><a href="owns.php">Owns</a> </li>
	<li><a href="part.php">Participated</a></li>
	<li><a href="s.php">Search</a></li>
	</ul>
		
		
	</div>
	
	    <div class="login-box">
    
        <h1>Add Driver Detais</h1>
            <form method="post" >
            <p>Driver Id</p>
            <input type="text" name="driver_id" placeholder="Enter Driver Id" required="">
            <p>Name</p>
            <input type="text" name="name" placeholder="Enter Name" required="">
            <p>Address</p>
            <input type="text" name="address" placeholder="Enter address" required="">
            <input action="driver.php" type="submit" name="submit" value="submit">
             			
            </form>
        
        
        </div>
	
	
		
		<footer>
	<div id = "foot">
	
	<h3>&copy;-2019:Designed by @Suvo</h3>	
	
	</div>
		
		<h4>       Purulia,WB-723103</h4>
		<h5>        &#9742;+91-8250-009-691,+91-7001-000-891</h5>
		
	</footer>
	</div>
	</body>
	</html>