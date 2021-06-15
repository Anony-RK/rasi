<?php
include("../ajaxconfig.php");
if(isset($_POST["dledgerid"])){
    $dledgerid=$_POST["dledgerid"];
  }
$deleteqry="UPDATE ledger SET status = 1 WHERE  ledgerid='".strip_tags($dledgerid)."' ";
$deleteres=$con->query($deleteqry) or die("Error:".$mysqli->error);
echo json_encode($deleteres);
?>