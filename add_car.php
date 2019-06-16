<?php

include 'conn.php';

if(isset($_POST['submit'])){
  
 $reg_no = $_POST['reg_no'];
 $model_no = $_POST['model_no'];
 $year = $_POST['year'];
 $q = " INSERT INTO `car`(`reg_no`, `model_no`, `year`) VALUES ('$reg_no','$model_no','$year')";

  $query = mysqli_query($con,$q);
}
else{
  echo'error!';
}

?>

<html>
<head>
    <title> Add car</title>
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
    <img src="avatar.png" class="avatar">
        <h1>Add car Detais</h1>
            <form method="post" >
            <p>Reg.No </p>
            <input type="text" name="reg_no" placeholder="Enter Reg No." required="">
            <p>Model No.</p>
            <input type="text" name="model_no" placeholder="Enter Model No." required="">
            <p>Year</p>
            <input type="text" name="year" placeholder="Enter Year Of Purchase" required="">
            <input type="submit" name="submit" value="submit">
             			
            </form>
        
        
        </div>
	
	
		
		<footer>
	<div id = "foot">
	
	<h3>&copy;-2019:Designed by @Suvo</h3>	
	
	</div>
		
		<h4>       Purulia,WB-723103</h4>
		<h5>        &#9742;+91-8250-009-691,+91-7001-000-891 </h5>
		
	</footer>
	</div>
	</body>
	</html>