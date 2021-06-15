<?php
require_once('../vendor/csvreader/php-excel-reader/excel_reader2.php');
require_once('../vendor/csvreader/SpreadsheetReader.php');
include("../ajaxconfig.php");

if(isset($_FILES["file"]["type"])){
$allowedFileType = ['application/vnd.ms-excel','text/xls','text/xlsx','application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'];

if(in_array($_FILES["file"]["type"],$allowedFileType)){
	  $targetPath = '../uploads/bulkimport/'.$_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'], $targetPath);
        $Reader = new SpreadsheetReader($targetPath);
        $sheetCount = count($Reader->sheets());
        for($i=0;$i<$sheetCount;$i++)
        {
        	$Reader->ChangeSheet($i);
        	foreach ($Reader as $Row){
            $ledgername = "";
            if(isset($Row[0])) {
            $ledgername = mysqli_real_escape_string($con,$Row[0]);
            }
            $subgroupname = "";
            if(isset($Row[1])) {
            $subgroupname = mysqli_real_escape_string($con,$Row[1]);
            }
            $costcentre = "";
            if(isset($Row[2])) {
            $costcentre = mysqli_real_escape_string($con,$Row[2]);
            }
            $inventory = "";
            if(isset($Row[2])) {
            $inventory = mysqli_real_escape_string($con,$Row[3]);
            }
            if($i==0)
            {
            $ledgerbulkqry="INSERT INTO ledger(ledgername, subgroupname, costcentre, inventory) VALUES('".strip_tags($ledgername)."', '".strip_tags($subgroupname)."', '".strip_tags($costcentre)."', '".strip_tags($inventory)."')";
            $result = $con->query($ledgerbulkqry);
            }}}

if(!empty($result)) {
	$message="Excel Data Imported into the Database !";
}
else{
    $message="Problem in Importing Excel Data".$con->error;
    }
}
}else{
    $message="Kindly Select The Excel";
}
echo json_encode($message);
?> 