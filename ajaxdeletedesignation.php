<?php
include('ajaxconfig.php');

if(isset($_POST["designationid"])){
	$designationid  = $_POST["designationid"];
}
 $deletedesignation = "UPDATE designation SET status=1 WHERE designationid = '".$designationid."'";
 $result = $con->query($deletedesignation);
 if($result){
 	echo "<p style='text-align:center;color:green'>"."Designation Removed Succesfully!"."</p>";
 }else{
 	echo "<p style='text-align:center;color:red'>"."Error:"." ".$con->error."</p>";
 }
?>