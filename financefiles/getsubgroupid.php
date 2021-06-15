<?php 
include('../ajaxconfig.php');

if(isset($_POST["egroupname"])){
	$egroupname = $_POST["egroupname"];
}
if(isset($_POST["esubgroupname"])){
	$esubgroupname = $_POST["esubgroupname"];
}
$subgrouparr = array();
$result=$con->query("SELECT * FROM subgroup WHERE groupname='".strip_tags($egroupname)."' AND  subgroupname='".strip_tags($esubgroupname)."' ");
while( $row = $result->fetch_assoc()){
      $subgrouparr["groupid"]= $row['groupid'];
      $subgrouparr["subgroupname"] = $row['subgroupname'];
      $subgrouparr["status"] =$row["status"];
   }
echo json_encode($subgrouparr);
?>