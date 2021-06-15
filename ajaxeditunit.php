<?php
include('ajaxconfig.php');
if(isset($_POST["unitid"])){
	$unitid  = $_POST["unitid"];
}
 $getunit = "SELECT * FROM units WHERE unitid = '".$unitid."'";
 $result = $mysqli->query($getunit);
 $unitarr = array();
 while($row=$result->fetch_assoc())
 {
 $unitname = $row['unit'];
 }
 echo $unitname;
?>