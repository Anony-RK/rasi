<?php 
include('ajaxconfig.php');

if(isset($_POST["subgroup"])){
	$subgroup = $_POST["subgroup"];
}

$ledgerarr = array();
$result=$con->query("SELECT  ledgername FROM ledger WHERE subgroupname='".strip_tags($subgroup)."' AND status=0");
while($row = $result->fetch_assoc()){
      $ledgername = $row['ledgername'];
      $ledgerarr[] = array("ledgername" => $ledgername);
   }
echo json_encode($ledgerarr);
?>