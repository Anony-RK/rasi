<?php
include 'ajaxconfig.php';
if(isset($_POST["subgroup"])){
	$subgroup=$_POST["subgroup"];
}
$select=$con->query("SELECT groupname FROM subgroup WHERE subgroupname='".$subgroup."' ");
while ($row=$select->fetch_assoc()) {
	$group=$row["groupname"];
}
echo json_encode($group);
?>