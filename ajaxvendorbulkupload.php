<?php
require_once('vendor/csvreader/php-excel-reader/excel_reader2.php');
require_once('vendor/csvreader/SpreadsheetReader.php');
include("ajaxconfig.php");

if(isset($_FILES["file"]["type"])){
 $file = $_FILES["file"]["tmp_name"];
 
$allowedFileType = ['application/vnd.ms-excel','text/xls','text/xlsx','application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'];
if(in_array($_FILES["file"]["type"],$allowedFileType)){
        $targetPath = 'uploads/bulkimport/'.$_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'], $targetPath);
        $Reader = new SpreadsheetReader($targetPath);
        $sheetCount = count($Reader->sheets());
        for($i=0;$i<$sheetCount;$i++)
        {
            $Reader->ChangeSheet($i);
            foreach ($Reader as $Row){
            $vendorcode = "";
            if(isset($Row[0])) {
            $vendorcode = mysqli_real_escape_string($con,$Row[0]);
            }
            $vendorname = "";
            if(isset($Row[1])) {
            $vendorname = mysqli_real_escape_string($con,$Row[1]);
            }
            $address1 = "";
            if(isset($Row[2])) {
            $address1 = mysqli_real_escape_string($con,$Row[2]);
            }
            $address2 = "";
            if(isset($Row[3])) {
            $address2 = mysqli_real_escape_string($con,$Row[3]);
            }
            $district = "";
            if(isset($Row[4])) {
            $district = mysqli_real_escape_string($con,$Row[4]);
            }
            $pincode = "";
            if(isset($Row[5])) {
            $pincode = mysqli_real_escape_string($con,$Row[5]);
            }
            $state = "";
            if(isset($Row[6])) {
            $state = mysqli_real_escape_string($con,$Row[6]);
            }
            $country = "";
            if(isset($Row[7])) {
            $cuntry = mysqli_real_escape_string($con,$Row[7]);
            }
            $contactperson = "";
            if(isset($Row[8])) {
            $contactperson = mysqli_real_escape_string($con,$Row[8]);
            }
            $contact = "";
            if(isset($Row[9])) {
            $contact = mysqli_real_escape_string($con,$Row[9]);
            }
            $mailid = "";
            if(isset($Row[10])) {
            $mailid = mysqli_real_escape_string($con,$Row[10]);
            }

            $stocktype = "";
            if(isset($Row[11])) {
            $stocktype = mysqli_real_escape_string($con,$Row[11]);
            }
            $deliverytime = "";
            if(isset($Row[12])) {
            $deliverytime = mysqli_real_escape_string($con,$Row[12]);
            }
            $reorderlevel = "";
            if(isset($Row[13])) {
            $reorderlevel = mysqli_real_escape_string($con,$Row[13]);
            }
            $minimumstock = "";
            if(isset($Row[14])) {
            $minimumstock = mysqli_real_escape_string($con,$Row[14]);
            }
            $maximumstock = "";
            if(isset($Row[15])) {
            $maximumstock = mysqli_real_escape_string($con,$Row[15]);
            }

            $isgst = "";
            if(isset($Row[16])) {
            $isgst = mysqli_real_escape_string($con,$Row[16]);
            }
            $gststate = "";
            if(isset($Row[17])) {
            $gststate = mysqli_real_escape_string($con,$Row[17]);
            }
            $statetype = "";
            if(isset($Row[18])) {
            $statetype = mysqli_real_escape_string($con,$Row[18]);
            }
            $gstnumber = "";
            if(isset($Row[19])) {
            $gstnumber = mysqli_real_escape_string($con,$Row[19]);
            }

            $bankname = "";
            if(isset($Row[20])) {
            $bankname = mysqli_real_escape_string($con,$Row[20]);
            }
            $branchname = "";
            if(isset($Row[21])) {
            $branchname = mysqli_real_escape_string($con,$Row[21]);
            }
            $accountnumber = "";
            if(isset($Row[22])) {
            $accountnumber = mysqli_real_escape_string($con,$Row[22]);
            }
            $ifsccode = "";
            if(isset($Row[23])) {
            $ifsccode = mysqli_real_escape_string($con,$Row[23]);
            }

            $subgroup = "";
            if(isset($Row[24])) {
            $subgroup = mysqli_real_escape_string($con,$Row[24]);
            }
            $groupname = "";
            if(isset($Row[25])) {
            $groupname = mysqli_real_escape_string($con,$Row[25]);
            }
            $ledgername = "";
            if(isset($Row[26])) {
            $ledgername = mysqli_real_escape_string($con,$Row[26]);
            }
            $creditlimit = "";
            if(isset($Row[27])) {
            $creditlimit = mysqli_real_escape_string($con,$Row[27]);
            }
            $costcentre = "";
            if(isset($Row[28])) {
            $costcentre = mysqli_real_escape_string($con,$Row[28]);
            }
            $inventory = "";
            if(isset($Row[29])) {
            $inventory = mysqli_real_escape_string($con,$Row[29]);
            }

        if($i==0 && $vendorcode !="Vendor Code")
        { 
        $insertvendor="INSERT INTO vendor(vendorcode, vendorname, address1, address2, district, pincode, state, country, contactperson, contact, mailid, stocktype, deliverytime, reorderlevel, minimumstock, maximumstock, isgst, gststate, statetype, gstnumber, bankname, branchname, accountnumber, ifsccode, subgroup, groupname, ledgername, creditlimit, costcentre,inventory) VALUES('".strip_tags($vendorcode)."', '".strip_tags($vendorname)."', '".strip_tags($address1)."', '".strip_tags($address2)."', '".strip_tags($district)."', '".strip_tags($pincode)."', '".strip_tags($state)."','".strip_tags($country)."','".strip_tags($contactperson)."', '".strip_tags($contact)."', '".strip_tags($mailid)."',  '".strip_tags($stocktype)."', '".strip_tags($deliverytime)."', '".strip_tags($reorderlevel)."', '".strip_tags($minimumstock)."', '".strip_tags($maximumstock)."', '".strip_tags($isgst)."', '".strip_tags($gststate)."', '".strip_tags($statetype)."', '".strip_tags($gstnumber)."', '".strip_tags($bankname)."', '".strip_tags($branchname)."', '".strip_tags($accountnumber)."', '".strip_tags($ifsccode)."', '".strip_tags($subgroup)."', '".strip_tags($groupname)."', '".strip_tags($ledgername)."', '".strip_tags($creditlimit)."', '".strip_tags($costcentre)."', '".strip_tags($inventory)."')";
        $insresult=$con->query($insertvendor);
    } } }  

    if(!empty($insresult)) {
    $message= "Excel Data Imported into the Database !";
    }
    else{
    $message ="Problem in Importing Excel Data".$con->error;
    }
}
}else{
    $message ="Kindly Select The Excel";
}
echo json_encode($message);
?>