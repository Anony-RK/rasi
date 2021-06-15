<?php
include '../ajaxconfig.php';
if(isset($_POST["ledgersubgroup"])){
	$ledgersubgroup=$_POST["ledgersubgroup"];

$getqry="SELECT groupname FROM subgroup WHERE subgroupname='".strip_tags($ledgersubgroup)."' ";
$res=$con->query($getqry);
while ($row=$res->fetch_assoc()){
	$groupname = $row["groupname"];
}
}
echo json_encode($groupname);
?>
