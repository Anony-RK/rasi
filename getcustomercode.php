<?php
include 'ajaxconfig.php';

$selectcc=$con->query("SELECT customercode FROM customer");
if($selectcc->num_rows>0){
	$customeravailable=$con->query("SELECT customercode FROM customer ORDER BY customerid DESC LIMIT 1");
	while ($row=$customeravailable->fetch_assoc()) {
		$customercode2=$row["customercode"];
	}
	$customercode1 = ltrim(strstr($customercode2, 'N'), 'N')+1;
	$customercode="CHN".$customercode1;
}else{
	$initialcustomercode=01;
	$customercode="CHN".$initialcustomercode;
}
echo json_encode($customercode);
?>