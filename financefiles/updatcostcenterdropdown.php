<?php
include '../ajaxconfig.php';
$getcostcentre=$con->query("SELECT costcentrename FROM costcentre WHERE status=0 ") or die("Error :".$con->error);
while ($row=$getcostcentre->fetch_assoc()) {
	$costcentrenamearray[]=$row["costcentrename"];
}
echo json_encode($costcentrenamearray);
?>