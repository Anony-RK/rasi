<?php
include '../ajaxconfig.php';
$getsubgroup=$con->query("SELECT subgroupname FROM subgroup WHERE status=0") or die("Error :".$con->error);
while ($row=$getsubgroup->fetch_assoc()) {
	$subgrouparray[]=$row["subgroupname"];
}
echo json_encode($subgrouparray);
?>