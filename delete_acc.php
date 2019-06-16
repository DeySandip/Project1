<?php

include 'conn.php';

$report_no = $_GET['report_no'];

$q = " DELETE FROM `accident` WHERE report_no = '$report_no' ";

mysqli_query($con,$q);
header('location:accident.php');

?>