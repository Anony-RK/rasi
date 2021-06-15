<?php
include '../ajaxconfig.php';
$exciseduty=$address1=$pan=$address2=$tin=$address3=$servicetax=$address4=$contactperson=$contactnumber="";
if(isset($_POST["ledgername"])){
	$ledgername=$_POST["ledgername"];
}
if(isset($_POST["ledgergroup"])){
	$ledgergroup=$_POST["ledgergroup"];
}
if(isset($_POST["ledgersubgroup"])){
	$ledgersubgroup=$_POST["ledgersubgroup"];
}
if(isset($_POST["ledgercostcentre"])){
	$ledgercostcentre=$_POST["ledgercostcentre"];
}
if(isset($_POST["inventory"])){
	$inventory=$_POST["inventory"];
}
if(isset($_POST["ledgerstatus"])){
	$ledgerstatus=$_POST["ledgerstatus"];
}

if(isset($_POST["exciseduty"])){
	$exciseduty=$_POST["exciseduty"];
}
if(isset($_POST["address1"])){
	$address1=$_POST["address1"];
}
if(isset($_POST["pan"])){
	$pan=$_POST["pan"];
}
if(isset($_POST["address2"])){
	$address2=$_POST["address2"];
}
if(isset($_POST["tin"])){
	$tin=$_POST["tin"];
}
if(isset($_POST["address3"])){
	$address3=$_POST["address3"];
}
if(isset($_POST["servicetax"])){
	$servicetax=$_POST["servicetax"];
}
if(isset($_POST["address4"])){
	$address4=$_POST["address4"];
}
if(isset($_POST["contactperson"])){
	$contactperson=$_POST["contactperson"];
}
if(isset($_POST["contactnumber"])){
	$contactnumber=$_POST["contactnumber"];
}



$ledgers[]=(1);
$isadd="SELECT ledgername FROM ledger";
$res=$con->query($isadd);
while($row=$res->fetch_assoc()){
	$ledgers[]=$row["ledgername"];
}
if(in_array($ledgername, $ledgers)){
	$ledgerinsert="Ledger Already Exists, Please Enter a Different Name!";
}else{
	$insertqry="INSERT INTO ledger(ledgername, groupname, subgroupname, costcentre, inventory, status, exciseduty, address1, pan, address2, tin, address3, servicetax, address4, contactperson, contactnumber) VALUES('".strip_tags($ledgername)."', 
	'".strip_tags($ledgergroup)."', '".strip_tags($ledgersubgroup)."', '".strip_tags($ledgercostcentre)."', '".strip_tags($inventory)."', '".strip_tags($ledgerstatus)."', '".strip_tags($exciseduty)."', '".strip_tags($address1)."', '".strip_tags($pan)."', '".strip_tags($address2)."', '".strip_tags($tin)."', '".strip_tags($address3)."', '".strip_tags($servicetax)."', '".strip_tags($address4)."', '".strip_tags($contactperson)."', '".strip_tags($contactnumber)."')";
	$insresult=$con->query($insertqry) or die($con->error);
	$ledgerinsert="Ledger Added Succesfully!";
}
echo json_encode($ledgerinsert);
?>