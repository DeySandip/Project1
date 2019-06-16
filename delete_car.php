<?php

include 'conn.php';

$reg_no = $_GET['reg_no'];

$q = " DELETE FROM `car` WHERE reg_no = '$reg_no' ";

mysqli_query($con,$q);
header('location:car.php');

?>