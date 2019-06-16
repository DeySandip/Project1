<?php
 include 'conn.php';

  if(isset($_POST['submit'])){

   $reg_no = $_GET['reg_no'];
 $model_no = $_POST['model_no'];
 $year = $_POST['year'];
 $q = " UPDATE `car` SET `model_no`='$model_no',`year`='$year' WHERE reg_no='$reg_no'  ";

  $query = mysqli_query($con,$q);

  
 }

?>


<html>
<head>
    <title> update car</title>
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
    <img src="avatar.png" class="avatar">
        <h1>Upadate Car Detais</h1>
            <form method="post" >
            <p>Reg No.</p>
            <input type="text" name="reg_no" placeholder="Enter reg_no">
            <p>Model No.</p>
            <input type="text" name="model_no" placeholder="Enter model_no">
            <p>Year</p>
            <input type="text" name="year" placeholder="Enter year">
            <input type="submit" name="submit" value="submit">
            <a href="car.php">Click Here To View Data</a> 
                  
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