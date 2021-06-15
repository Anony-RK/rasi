<?php
include '../ajaxconfig.php';

if(isset($_POST["selectledger"])){
	$selectledger=$_POST["selectledger"];
}

$ledgerdetails=array();
$getqry="SELECT * FROM ledger WHERE ledgername='".strip_tags($selectledger)."' ";
$res=$con->query($getqry);
while ($row=$res->fetch_assoc()){
	$ledgerdetails["ledgerid"] = $row["ledgerid"];
	$ledgerdetails["eledgername"] = $row["ledgername"];
	$ledgerdetails["eledgergroupname"] = $row["groupname"];
	$ledgerdetails["eledgersubgroupname"] = $row["subgroupname"];
	$ledgerdetails["einventory"] = $row["inventory"];
	$ledgerdetails["eledgercostcentre"] = $row["costcentre"];
	$ledgerdetails["eledgerstatus"] = $row["status"];

	$ledgerdetails["exciseduty"] = $row["exciseduty"];
	$ledgerdetails["pan"] = $row["pan"];
	$ledgerdetails["tin"] = $row["tin"];
	$ledgerdetails["servicetax"] = $row["servicetax"];
	$ledgerdetails["contactperson"] = $row["contactperson"];
	$ledgerdetails["contactnumber"] = $row["contactnumber"];
	$ledgerdetails["address1"] = $row["address1"];
	$ledgerdetails["address2"] = $row["address2"];
	$ledgerdetails["address3"] = $row["address3"];
	$ledgerdetails["address4"] = $row["address4"];

}
echo json_encode($ledgerdetails);
?>
