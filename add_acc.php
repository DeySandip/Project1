<?php

include 'conn.php';

if(isset($_POST['submit'])){
  
 $report_no = $_POST['report_no'];
 $date = $_POST['date'];
 $location= $_POST['location'];
 $q = " INSERT INTO `accident`(`report_no`, `date`, `location`) VALUES ('$report_no','$date','$location')";

  $query = mysqli_query($con,$q);
}
else{
  echo'error!';
}

?>

<html>
<head>
    <title> Add acc</title>
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
   
        <h1>Add car Accident Detais</h1>
            <form method="post" >
            <p>Report.No </p>
            <input type="text" name="report_no" placeholder="Enter Report No.">
            <p>Date</p>
            <input type="date" name="date" placeholder="Enter Date">
            <p>Location</p>
            <input type="text" name="location" placeholder="Enter location">
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