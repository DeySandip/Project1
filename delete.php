<?php

include 'conn.php';

$driver_id = $_GET['driver_id'];

$q = " DELETE FROM `person` WHERE driver_id = '$driver_id' ";

mysqli_query($con,$q);
header('location:driver.php');

?>