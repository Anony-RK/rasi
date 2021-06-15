<?php
include("../ajaxconfig.php");
if(isset($_POST["dgroupname"])){
    $dgroupname=$_POST["dgroupname"];
  }
  if(isset($_POST["dsubgroupname"])){
    $dsubgroupname=$_POST["dsubgroupname"];
  }

  $isdelgrparray[]=(1);
  $isdelete="SELECT subgroupname FROM ledger";
  $isdelresult=$mysqli->query($isdelete);
  while($row=$isdelresult->fetch_assoc()){
    $isdelgrparray[]=$row["subgroupname"];
  }

  if(in_array($dsubgroupname, $isdelgrparray)){
    $delsubgroup = "You Don't Have Rights To Delete This Subgroup!";
  }else{

    $deletedsubgrp = "UPDATE subgroup SET status=1 WHERE groupname = '".strip_tags($dgroupname)."' AND subgroupname = '".strip_tags($dsubgroupname)."' ";

    $delsubgrp = $mysqli->query($deletedsubgrp) or die("Error :".$mysqli->error);
    $delsubgroup = "Sub-Group Has Been Deleted!";
  }
  echo json_encode($delsubgroup);
  ?>