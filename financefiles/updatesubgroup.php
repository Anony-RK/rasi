  <?php
  include("../ajaxconfig.php");
  if(isset($_POST["egroupid"])){
    $egroupid = $_POST["egroupid"];
  }
  if(isset($_POST["egroupname"])){
    $egroupname = $_POST["egroupname"];
  }
  if(isset($_POST["newsubgroupname"])){
    $newsubgroupname = $_POST["newsubgroupname"];
  }
  if(isset($_POST["esubgroupstatus"])){
    $esubgroupstatus = $_POST["esubgroupstatus"];
  }

  $grouparray[]=(1);
  $isduplicate="SELECT subgroupname FROM subgroup WHERE groupname = '".strip_tags($egroupname)."' ";
  $isdupresult=$con->query($isduplicate);
    while ($row=$isdupresult->fetch_assoc()) {
      $grouparray[]=$row["subgroupname"];
}
if(in_array($newsubgroupname, $grouparray)){ 
     $updateresult="Sub-group Already Exists, Please Enter a Different Name!";
   }else{
     $updategrp="UPDATE subgroup SET groupname='".strip_tags($egroupname)."', subgroupname='".strip_tags($newsubgroupname)."', status='".strip_tags($esubgroupstatus)."' WHERE groupid='".strip_tags($egroupid)."' ";
     $updated=$mysqli->query($updategrp) or die("Error :".$mysqli->error);
     $updateresult="Sub-group Has been Updated!";
   }
  echo json_encode($updateresult);
  ?>