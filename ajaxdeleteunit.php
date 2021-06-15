<?php
include('ajaxconfig.php');
if(isset($_POST["unitid"])){
	$unitid  = $_POST["unitid"];
}
//  $deleteunit = "DELETE FROM units WHERE unitid = '".$unitid."'";
//  $result = $mysqli->query($deleteunit);
//  if($result){
//  	echo "<p style='text-align:center;color:green'>"."Unit Removed Succesfully!"."</p>";
//  }else{
//  	echo "<p style='text-align:center;color:red'>"."Error:"." ".$mysqli->error."</p>";
//  }

 
if($unitid>0){
	$update=$mysqli->query("UPDATE units SET status=1 WHERE unitid='".$unitid."' ");
	if($update == true){
		echo "<p style='text-align:center;color:green'>"."Unit Removed Succesfully!"."</p>";
	}else{
		echo "<p style='text-align:center;color:red'>"."Error:"." ".$mysqli->error."</p>";
	}
}

?>