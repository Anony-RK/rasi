<?php
include('ajaxconfig.php');
if(isset($_POST["stockid"])){
	$stockid  = $_POST["stockid"];
}
 $getstock = "SELECT * FROM stocks WHERE stockid = '".$stockid."' and status=0";
 $result = $mysqli->query($getstock);
 $stockarr = array();
 while($row=$result->fetch_assoc())
 {
 $stockname = $row['stock'];
 }
 echo $stockname;
?>