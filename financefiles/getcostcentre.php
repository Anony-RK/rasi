<?php
include '../ajaxconfig.php';

if(isset($_POST["costcentrename"])){
	$costcentrename=$_POST["costcentrename"];
}

$getid="SELECT * FROM costcentre WHERE costcentrename='".strip_tags($costcentrename)."' ";
$result=$con->query($getid);
while ($row = $result->fetch_assoc()) {
	$costcentre["costcentreid"] = $row["costcentreid"];
	$costcentre["costcentrestatus"]=$row["status"];
}
echo json_encode($costcentre);
?>