<?php
require_once('vendor/csvreader/php-excel-reader/excel_reader2.php');
require_once('vendor/csvreader/SpreadsheetReader.php');
include("ajaxconfig.php");

if(isset($_FILES["file"]["type"])){
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
            $bankcode = "";
            if(isset($Row[0])) {
            $bankcode = mysqli_real_escape_string($con,$Row[0]);
            }
            $bankname = "";
            if(isset($Row[1])) {
            $bankname = mysqli_real_escape_string($con,$Row[1]);
            }
            $accountno = "";
            if(isset($Row[2])) {
            $accountno = mysqli_real_escape_string($con,$Row[2]);
            }
            $branchname = "";
            if(isset($Row[3])) {
            $branchname = mysqli_real_escape_string($con,$Row[3]);
            }
            $shortform = "";
            if(isset($Row[4])) {
            $shortform = mysqli_real_escape_string($con,$Row[4]);
            }
            $purpose = "";
            if(isset($Row[5])) {
            $purpose = mysqli_real_escape_string($con,$Row[5]);
            }
            $email = "";
            if(isset($Row[6])) {
            $email = mysqli_real_escape_string($con,$Row[6]);
            }
            $ifsccode = "";
            if(isset($Row[7])) {
            $ifsccode = mysqli_real_escape_string($con,$Row[7]);
            }
            $contactperson = "";
            if(isset($Row[8])) {
            $contactperson = mysqli_real_escape_string($con,$Row[8]);
            }
            $contactno = "";
            if(isset($Row[9])) {
            $contactno = mysqli_real_escape_string($con,$Row[9]);
            }
            $micrcode = "";
            if(isset($Row[10])) {
            $micrcode = mysqli_real_escape_string($con,$Row[10]);
            }
            $accounttype = "";
            if(isset($Row[11])) {
            $accounttype = mysqli_real_escape_string($con,$Row[11]);
            }
            $subgrouptype = "";
            if(isset($Row[12])) {
            $subgrouptype = mysqli_real_escape_string($con,$Row[12]);
            }
            $group = "";
            if(isset($Row[13])) {
            $group = mysqli_real_escape_string($con,$Row[13]);
            }
            $ledgername = "";
            if(isset($Row[14])) {
            $ledgername = mysqli_real_escape_string($con,$Row[14]);
            }
            $costcenter = "";
            if(isset($Row[15])) {
            $costcenter = mysqli_real_escape_string($con,$Row[15]);
            if(isset($costcenter) &&    $costcenter == 'Yes')		
               {
                   $costcenter             = 0;
               }
               else
               {
                   $costcenter             = 1;
               }         
            }         
        if($i==0 && $bankname !="Bank Name")
        { 
        $query = "INSERT INTO bankmaster(
            bankcode,bankname,accountno,branchname,shortform,purpose,mailid,
            ifsccode,contactperson,contactno,micrcode,typeofaccount,undersubgroup,
            fgroup,ledgername,costcenter) 
        VALUES (
        '".strip_tags($bankcode)."','".strip_tags($bankname)."','".strip_tags($accountno)."',
        '".strip_tags($branchname)."','".strip_tags($shortform)."','".strip_tags($purpose)."',
        '".strip_tags($email)."','".strip_tags($ifsccode)."','".strip_tags($contactperson)."',
        '".strip_tags($contactno)."','".strip_tags($micrcode)."','".strip_tags($accounttype)."',
        '".strip_tags($subgrouptype)."','".strip_tags($group)."','".strip_tags($ledgername)."',
        '".strip_tags($costcenter)."')";

       $result = $con->query($query);

    } } }  

    if(!empty($result)) {
    echo "Excel Data Imported into the Database !";
    }
    else{
    echo "Problem in Importing Excel Data".$con->error;
    }
}
}else{
    echo "Kindly Select The Excel";
}

?>