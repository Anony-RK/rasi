<?php
include 'ajaxconfig.php';

$selectvc=$con->query("SELECT vendorcode FROM vendor");
if($selectvc->num_rows>0){
	$vendoravailable=$con->query("SELECT * FROM vendor ORDER BY vendorid DESC LIMIT 1");
	while ($row=$vendoravailable->fetch_assoc()) {
		$vendorcode2=$row["vendorcode"];
	}
	$vendorcode1 = ltrim(strstr($vendorcode2, '-'), '-')+1;
	$vendorcode="LOC"."-".$vendorcode1;
}else{
	$initialvendorcode=1001;
	$vendorcode="LOC"."-".$initialvendorcode;
}
echo json_encode($vendorcode);
?>