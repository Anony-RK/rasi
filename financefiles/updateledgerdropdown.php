<?php
include '../ajaxconfig.php';
$getledger=$con->query("SELECT ledgername FROM ledger WHERE status=0 ") or die("Error :".$con->error);
while ($row=$getledger->fetch_assoc()) {
	$ledgerarray[]=$row["ledgername"];
}
echo json_encode($ledgerarray);
?>