 <?php
 include '../ajaxconfig.php';
  if(isset($_POST["costcentrename"])){
    $costcentrename = $_POST["costcentrename"];
  }
  if(isset($_POST["costcentrestatus"])){
    $costcentrestatus = $_POST["costcentrestatus"];
  }
  $costcentrearray[]=(1);
  $centre = "SELECT costcentrename FROM costcentre"; 
  $ispresent=$con->query($centre);
  while ($row=$ispresent->fetch_assoc()){
    $costcentrearray[]=$row["costcentrename"];
  }
  if(in_array($costcentrename , $costcentrearray)){
    $cosrcentreres= "Cost Cender Already Exists, Please Enter a Different Name!";
  }else{
    $insertcentre="INSERT INTO costcentre(costcentrename, status) VALUES('".strip_tags($costcentrename)."', '".strip_tags($costcentrestatus)."') ";
    $insertcostcentre=$con->query($insertcentre) or die("Error :".$con->error);
    $cosrcentreres= "Cost Cender Added Succesfully";
  }
echo json_encode($cosrcentreres);
?>