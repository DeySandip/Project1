
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
	<li><a class="active" href="car.php">Car Details</a></li>
	
	<li><a href="accident.php">Accident Info </a></li>
	<li><a href="owns.php">Owns</a> </li>
	<li><a href="part.php">Participated</a></li>
	<li><a href="s.php">Search</a></li>
	</ul>
		
		
	</div>

		 <div >
 <div class="col-lg-12">
 
 <br>
 <table border=2px style="border-color:grey">

 <th colspan="12" style="font-size: 20px; color:yellow;" >Car Data  Details</th>
 <tr>
 
 <th> Reg.No<hr></th>
 <th> Model <hr></th>
 <th> Year <hr></th>
 <th> Delete <hr></th>
 <th> Update <hr></th>

  </tr>
  <?php

  include 'conn.php'; 
 $q = "select * from car ";

  $query = mysqli_query($con,$q);

  while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center" display="block">
 <td > <?php echo $res['reg_no'];  ?> </td>
 <td> <?php echo $res['model_no'];  ?> </td>
 <td> <?php echo $res['year'];  ?> </td>
 <td> <button style="background-color:red"> <a style="color:white" href="delete_car.php?reg_no=<?php echo $res['reg_no']; ?>" class="text-white"> Delete </a>  </button> </td>
 <td> <button  style="background-color:blue;" > <a style="color:white" href="update_car.php?reg_no=<?php echo $res['reg_no']; ?>" class="text-white"> Update </a> </button> </td>

  </tr>

  <?php 
 }
  ?>
  <button id="b1"><a href="add_car.php">Insert  </a> </button>
 
 </table>  

  </div>
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