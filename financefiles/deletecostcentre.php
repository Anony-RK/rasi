<?php
include '../ajaxconfig.php';
if(isset($_POST["dcostcentreid"])){
  $dcostcentreid=$_POST["dcostcentreid"];
}
if(isset($_POST["dcostcentre"])){
  $dcostcentre=$_POST["dcostcentre"];
}
$costcentres[]=(1);
$isdelete="SELECT costcentre FROM ledger";
$centres=$con->query($isdelete) or die("Erro :".$mysqli->error);
while($row=$centres->fetch_assoc()){
	$costcentres[]=$row["costcentre"];
}
if(in_array($dcostcentre, $costcentres)){
	$costcentredelete="You Don't Have Rights To Delete This Cost centre!";
}
else{
$deletecentre="UPDATE costcentre SET status='1' WHERE costcentreid='".$dcostcentreid."' ";
$deletecostcentre=$con->query($deletecentre) or die("Erro :".$mysqli->error);
$costcentredelete="Cost centre Has been Deleted!";
}
echo json_encode($costcentredelete);
?>