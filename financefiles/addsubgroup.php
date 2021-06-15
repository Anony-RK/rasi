<?php
include("../ajaxconfig.php");
if(isset($_POST["groupname"])){
    $groupname = $_POST["groupname"];
  }
  if(isset($_POST["subgroupname"])){
    $subgroupname = $_POST["subgroupname"];
  }
  if(isset($_POST["subgroupstatus"])){
    $subgroupstatus = $_POST["subgroupstatus"];
  }
  $grouparray[]=(1);
  $isduplicate="SELECT subgroupname FROM subgroup WHERE groupname = '".strip_tags($groupname)."' ";
  $isdupresult=$con->query($isduplicate);
    while ($row=$isdupresult->fetch_assoc()) {
      $grouparray[]=$row["subgroupname"];
}
if(in_array($subgroupname, $grouparray)){ 
     $insresult="Sub-group Already Exists, Please Enter a Different Name!";
}else{
    $insertgrp = "INSERT INTO subgroup(groupname, subgroupname, status) VALUES('".strip_tags($groupname)."', '".strip_tags($subgroupname)."', '".strip_tags($subgroupstatus)."') ";
    $insresult=$con->query($insertgrp) or die("Error :".$con->error);
    $insresult="Subgroup Added Succesfully!";
}
echo json_encode($insresult);
?>