<?php
 include 'conn.php';

  if(isset($_POST['submit'])){

   $driver_id = $_GET['driver_id'];
 $name = $_POST['name'];
 $address = $_POST['address'];
 $q = " UPDATE `person` SET `name`='$name',`address`='$address' WHERE driver_id='$driver_id'  ";

  $query = mysqli_query($con,$q);

  
 }

?>


<html>
<head>
    <title> Add Driver  </title>
    <link rel="stylesheet" type="text/css" href="basic.css">   
</head>
  
  <body>
  <div id="container">
  
  <header>

  <h1 class='head'>A.B.C. Insurance  co. Ltd.</h1>
  <h2>      Car & Bike Insurance Details</h2>
  
  </header>
  
    
  </div>
  
      <div class="login-box" style="top: 55%;height: 430px;">
    <!--<img src="avatar.png" class="avatar">-->
        <h1>Upadate Driver Detais</h1>
            <form method="post" >
            <p>Driver Id</p>
            <input type="text" name="driver_id" placeholder="Enter Driver Id">
            <p>Name</p>
            <input type="text" name="name" placeholder="Enter Name">
            <p>Address</p>
            <input type="text" name="address" placeholder="Enter address">
            <input type="submit" name="submit" value="submit">
            <a href="driver.php">Click Here To View Data</a> 
                  
            </form>
        
        
        </div>
  
  
    
    <footer>
  <div id = "foot">
  
  <h3>&copy;-2019:Designed by @Suvo</h3>  
  
  </div>
    
    <h4>       Purulia,WB-723103</h4>
    <h5>        &#9742;+91-8250-389-001,+91-7001-005-891 </h5>
    
  </footer>
  </div>
  </body>
  </html>