<?php

include('ajaxconfig.php');

if(isset($_POST["designationid"])){
	$designationid  = $_POST["designationid"];
}
 $getdesignation = "SELECT * FROM designation WHERE designationid = '".$designationid."'";
 $result = $con->query($getdesignation);
 $designationarr = array();
 while($row=$result->fetch_assoc())
 {
 $designation = $row['designation'];
 }
 echo $designation;
?>