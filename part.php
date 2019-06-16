<?php
 include 'conn.php';

  if(isset($_POST['submit'])){

   $regno = $_POST['regno'];
 
 $q = " update part set reportNumber=12 , damageAmount=25000 where regno ='$regno' ";

  $query = mysqli_query($con,$q);

  
 }
 ?>

<html>
<head>
    <title> Home Page	</title>
    <link rel="stylesheet" type="text/css" href="basic.css">   
</head>
  
	<body>
	<div id="container">
	
	<header>

	<h1 class='head'>A.B.C. Insurance Ltd.</h1>
	<h2>      Car & Bike Insurance Details</h2>
	
  
	</div>
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

		 <div >
 <div class="col-lg-12">
 </br>
 
 
 </br>
 <table border=2px style="border-color:grey">
<th colspan="12" style="font-size: 20px; color:yellow;"> Details</th>
 
 <tr>
 
 <th> Driver ID<hr></th>
 <th> Reg No<hr></th>
 <th> Report No <hr></th>
 <th> Damage Amount<hr></th>
 <th style="text-decoration: none;"> Delete <hr></th>


  </tr>
  <?php

  include 'conn.php'; 
 $q = "select * from part";

  $query = mysqli_query($con,$q);

  while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center" display="block">
 <td > <?php echo $res['driver_id'];  ?> </td>
 <td> <?php echo $res['regno'];  ?> </td>
 <td> <?php echo $res['reportNumber'];  ?> </td>
 <td> <?php echo $res['damageAmount'];  ?> </td>
 <td> <button style="background-color:red"> <a style="color:white" href="delete_part.php?driver_id=<?php echo $res['driver_id']; ?>" class="text-white"> Delete </a>  </button> </td>
 

  </tr>

  <?php 
 }
  ?>
 <button id="b1"><a href="add_part.php">Insert  </a> </button>
 
 </table>  

  </div>
 </div>

 <div class="login-box" style="height: 250px; width: 320px;top: 45%;left: 90%;">
<h8> 3(a).Update Damage Amount To-25000 </h8>
		<h9> where Report No-12</h9> <hr></hr>
		<p align="center">Car Reg. NO</p>
		<form method="post">
		<input type="text" name="regno" placeholder="enter reg. no">
		  <input type="submit" name="submit" value="Update">

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