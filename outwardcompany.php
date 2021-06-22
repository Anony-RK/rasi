<?php
include("ajaxconfig.php");

  
$companygst = $_REQUEST['companyname'];
  
// $con = mysqli_connect("localhost", "root", "", "gfg");
  
if ($companygst !== "") {
      
    // $query = mysqli_query($con, "SELECT first_name, 
    // last_name FROM userdata WHERE user_id='$user_id'");

 $data = mysqli_query($mysqli, "SELECT companyname,address,address1,address2,district,country,email,pincode,state,phonenumber
         From company WHERE gst = '$companygst'") or die (mysqli_error()); 
      
  
    $row = mysqli_fetch_array($data);
  
    $companyname = $row["companyname"];
    $address = $row["address"];
    $email = $row["email"];
    $pincode = $row["pincode"];
    $state = $row["state"];
    $phonenumber = $row["phonenumber"];
    $address1 = $row["address1"];
    $address2 = $row["address2"];
    $district = $row["district"];
    $country = $row["country"];


}
  
$result = array(array( "$address ","$address1","$address2","$district","$state","$country","$pincode"), "$phonenumber","$email");
  
$myJSON = json_encode($result);
echo $myJSON;
?>