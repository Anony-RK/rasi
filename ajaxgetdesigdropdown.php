<?php 
include('ajaxconfig.php');

$designationarr = array();
$result=$con->query("SELECT * FROM designation where 1 and status=0");
while( $row = $result->fetch_assoc()){
      $designationid = $row['designationid'];
      $designation = $row['designation'];
      $designationarr[] = array("designationid" => $designationid, "designation" => $designation);
   }
echo json_encode($designationarr);
?>