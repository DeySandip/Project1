<?php


?>
<html>
<head>
    <title> search </title>
    <link rel="stylesheet" type="text/css" href="basic.css"> 
    <style>
     
  #cm-popup{
    background-color: rgba(0,0,0,0.6);
         display:none;
   box-shadow: 0 0 10px #888888;
   position:fixed;
   left:50%; top: 50%;
   transform:translateX(-50%);
         width:50%;
   height:200px;
   }
 .cm-btn{
         border:none;
         background:#405080;
         color:white;
   border-radius:2px; cursor: pointer;
  }


   #sm-popup{
    background-color: rgba(0,0,0,0.6);
         display:none;
   box-shadow: 0 0 10px #888888;
   position:fixed;
   left:50%; top: 50%;
   transform:translateX(-50%);
         width:50%;
   height:200px;
   }
 .sm-btn{
         border:none;
        background-color: rgba(0,0,0,0.7);
         color:white;
   border-radius:2px;
   cursor: pointer;
  }

</style>  
</head>
  
  <body>

  <div id="container">
  
  <header>

  <h1 class='head'>A.B.C. Insurance  co. Ltd.</h1>
  <h2>      Car & Bike Insurance Details</h2>
  
  </header>
</br>

 <button class="cm-btn" style="background-color: white; font-weight: bold;font-size: 20px;  text-align: center;"><a href="driver.php">Home Page </a></button>
 </br> 
     
<div>
 <div style=" margin:20px auto;">
  <button
          class="sm-btn"
          style="font-size:30px;  "
          onclick="document.getElementById('sm-popup').style.display='block'">
   Click here to find total no of accident of car with specific model no.
    
  </button>
</div>  
   
 <div id="sm-popup">
      <!-- header of the pop up window -->
  <h2
     style="width:98%;color:white;text-align:center;padding:1%;background:#405080;">
    Result
  </h2>


   <table border=2px style="border-color:grey">

 
 <tr> 
  <th> MODEL NO.<hr></th>
 <th> NO. ACCIDENT<hr></th>
 
   </tr>


  <?php

  include 'conn.php'; 
 $q = "select count(driver_id),model_no from car,part where part.regno=car.reg_no group by model_no;";

  $query = mysqli_query($con,$q);

  while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center" display="block">
   <td> <?php echo $res['model_no'];  ?> </td>
 <td > <?php echo $res['count(driver_id)'];  ?> </td>

 
 

  </tr>


  <?php 
 }
  ?>
</table>
   
  
  
  <div style="padding:2%;overflow:hidden;">

            
   <!-- Hide button -->
   <button
          class="sm-btn"
       style="position:absolute;bottom:5%;left:2%;width:80px; height:40px;"
       onclick="document.getElementById('sm-popup').style.display='none'">
       Hide
      </button>
  </div>
 </div></div>
  

  
 </br>
    <!--  query button set up -->
 <div style=" margin:20px auto;">
  <button
          class="cm-btn"
          style="font-size:30px;  "
          onclick="document.getElementById('cm-popup').style.display='block'">
   Click here to find total no of people who woned cars that were involved in accident in 2006
    
  </button></div>

</br></br>

 
 
 <div> <!-- Pop up window -->
 <div id="cm-popup">
      <!-- header of the pop up window -->
  <h2
     style="width:98%;color:white;text-align:center;padding:1%;background:#405080;">
    Result
  </h2>
 <!--new table-->

  <table  border="3px;" style="float:right; width: 20%;">
    <tr>
      <th colspan="4">no of owner</th>
    </tr>
    <?php 
        include 'conn.php';
        $q="select count(distinct(driver_id)) as no_of_people from accident,part where part.reportNumber=accident.report_no and date between '2005-12-31' and '2007-1-1';";
        $query= mysqli_query($con,$q);
        while($res = mysqli_fetch_array($query)) {
         ?>
         <tr class="text-center" diaplay="block">
          <td><?php echo $res['no_of_people']; ?> </td>
          </tr><?php
        }
    ?>
  </table>





   <table border=2px style="border-color:grey">

 
 <tr>
 
 <th> Report No<hr></th>
 <th> Date <hr></th>
 <th> Location <hr></th>
 

  </tr>
  <?php

  include 'conn.php'; 
 $q = "SELECT * FROM `accident` WHERE date BETWEEN '2005-12-31' AND '2007-1-1';";

  $query = mysqli_query($con,$q);

  while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center" display="block">
 <td > <?php echo $res['report_no'];  ?> </td>
 <td> <?php echo $res['date'];  ?> </td>
 <td> <?php echo $res['location'];  ?> </td>
 

  </tr>


  <?php 
 }
  ?>
</table>
  

            
   <!-- Hide button -->
   <button
          class="cm-btn"
       style="position:absolute;bottom:5%;left:2%;width:80px; height:40px;"
       onclick="document.getElementById('cm-popup').style.display='none'">
       Hide
      </button>
  </div>
 </div></div> </div>


  
    
   
  
  </body>
  </html>