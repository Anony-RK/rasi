<?php


$mysqli = mysqli_connect("localhost", "root", "", "rasi") or die("Error in database connection".mysqli_error($mysqli));



mysqli_set_charset($mysqli,"utf8");
$timeZoneQry = "set time_zone = '+5:30' ";
$mysqli->query($timeZoneQry );
?>
