<?php
include("ajaxconfig.php");

  
$customercode = $_REQUEST['customercode'];
  
// $con = mysqli_connect("localhost", "root", "", "gfg");
  
if ($customercode !== "") {
      
    // $query = mysqli_query($con, "SELECT first_name, 
    // last_name FROM userdata WHERE user_id='$user_id'");

 $data = mysqli_query($mysqli, "SELECT customername,gstnumber,address1,address2,district,mobilenumber,
        state,country,pincode,customercode From customer WHERE customercode = '$customercode'") or die (mysqli_error()); 
      
  
    $row = mysqli_fetch_array($data);
  
    $customername = $row["customername"];
    $gstnumber = $row["gstnumber"];
    $address1 = $row["address1"];
    $address2 = $row["address2"];
    $district = $row["district"];
    $state = $row["state"];
    $country = $row["country"];
    $pincode = $row["pincode"];
    $mobilenumber = $row["mobilenumber"];
    $customercode = $row["customercode"];
    // $gstnumber = $row["gstnumber"];


}
  
$result = array("$customername", "$gstnumber" ,array( "$address1 ", "$address2", "$district", "$state", "$country","$pincode"), "$mobilenumber","$customercode");
  
$myJSON = json_encode($result);
echo $myJSON;
?>