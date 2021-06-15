<?php
include 'ajaxconfig.php';

$selectmc=$con->query("SELECT membershipno FROM customer");
if($selectmc->num_rows>0){
	$memberavailable=$con->query("SELECT * FROM customer ORDER BY customerid DESC LIMIT 1");
	while ($row=$memberavailable->fetch_assoc()) {
		$membershipno2=$row["membershipno"];
	}
	$membershipno1 = ltrim(strstr($membershipno2, 'T'), 'T')+1;
	$membershipno="NAT".$membershipno1;
}else{
	$initialmemnum=1001;
	$membershipno="NAT".$initialmemnum;
}
echo json_encode($membershipno);
?>