
<html>
<head>
    <title> owns	</title>
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
<th colspan="12" >Owns Table</th>
 
 <tr>


 <th>Driver Id <hr></th>
 <th> Reg No <hr></th>
 <th style="text-decoration: none;"> Delete <hr></th>


  </tr>
  <?php

  include 'conn.php'; 
 $q = "select * from owns ";

  $query = mysqli_query($con,$q);

  while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center" display="block">
 <td > <?php echo $res['driver_id'];  ?> </td>
 <td> <?php echo $res['regno'];  ?> </td>
 <td> <button style="background-color:red"> <a style="color:white" href="delete_owns.php?driver_id=<?php echo $res['driver_id']; ?>" class="text-white"> Delete </a>  </button> </td>

  </tr>

  <?php 
 }
  ?>
  <button id="b1"><a href="add_owns.php">Insert  </a> </button>
 
 </table>  
  </div>
 </div>






		
		
	</div>
	</body>
	</html>