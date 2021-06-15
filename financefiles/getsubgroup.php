<?php 
include('../ajaxconfig.php');

if(isset($_POST["groupname"])){
	$groupname = $_POST["groupname"];
}

$subgrparr = array();
$result=$con->query("SELECT * FROM subgroup WHERE groupname='".strip_tags($groupname)."' AND status=0");
while( $row = $result->fetch_assoc()){
      $groupid = $row['groupid'];
      $subgroupname = $row['subgroupname'];
      $subgrparr[] = array("groupid" => $groupid, "subgroupname" => $subgroupname);
   }
echo json_encode($subgrparr);
?>