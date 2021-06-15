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
            $employeename = "";
            if(isset($Row[0])) {
            $employeename = mysqli_real_escape_string($con,$Row[0]);
            }
            $gender = "";
            if(isset($Row[1])) {
            $gender = mysqli_real_escape_string($con,$Row[1]);
            }
            $mobilenumber = "";
            if(isset($Row[2])) {
            $mobilenumber = mysqli_real_escape_string($con,$Row[2]);
            }
            $dateofbirth = "";
            if(isset($Row[3])) {
            $dateofbirth = mysqli_real_escape_string($con,$Row[3]);
            }
            $dateofjoining = "";
            if(isset($Row[4])) {
            $dateofjoining = mysqli_real_escape_string($con,$Row[4]);
            }
            $expertise = "";
            if(isset($Row[5])) {
            $expertise = mysqli_real_escape_string($con,$Row[5]);
            }
            $starrating = "";
            if(isset($Row[6])) {
            $starrating = mysqli_real_escape_string($con,$Row[6]);
            }
            $basic = "";
            if(isset($Row[7])) {
            $basic = mysqli_real_escape_string($con,$Row[7]);
            }
            $hra = "";
            if(isset($Row[8])) {
            $hra = mysqli_real_escape_string($con,$Row[8]);
            }
            $conveyance = "";
            if(isset($Row[9])) {
            $conveyance = mysqli_real_escape_string($con,$Row[9]);
            }
            $allowance = "";
            if(isset($Row[10])) {
            $allowance = mysqli_real_escape_string($con,$Row[10]);
            }
            $grosspay = "";
            if(isset($Row[11])) {
            $grosspay = mysqli_real_escape_string($con,$Row[11]);
            }
            $tds = "";
            if(isset($Row[12])) {
            $tds = mysqli_real_escape_string($con,$Row[12]);
            }
            $pf = "";
            if(isset($Row[13])) {
            $pf = mysqli_real_escape_string($con,$Row[13]);
            }
            $esi = "";
            if(isset($Row[14])) {
            $esi = mysqli_real_escape_string($con,$Row[14]);
            }
            $anyotherdeduction = "";
            if(isset($Row[15])) {
            $anyotherdeduction = mysqli_real_escape_string($con,$Row[15]);
            }
            $totaldeduction = "";
            if(isset($Row[16])) {
            $totaldeduction = mysqli_real_escape_string($con,$Row[16]);
            }

        if($i==0 && $employeename!="Employee Name")
		{ 
        $query = "INSERT INTO employee(employeename, gender, mobilenumber, dateofbirth, dateofjoining, expertise, starrating, basic, hra, conveyance, allowance, grosspay, tds, pf, esi, anyotherdeduction, totaldeduction) VALUES (
	   '".strip_tags($employeename)."',
	   '".strip_tags($gender)."',
	   '".strip_tags($mobilenumber)."',
	   '".strip_tags($dateofbirth)."',
	   '".strip_tags($dateofjoining)."',
	   '".strip_tags($expertise)."',
	   '".strip_tags($starrating)."',
	   '".strip_tags($basic)."',
	   '".strip_tags($hra)."',
	   '".strip_tags($conveyance)."',
       '".strip_tags($allowance)."',
       '".strip_tags($grosspay)."',
       '".strip_tags($tds)."',
       '".strip_tags($pf)."',
       '".strip_tags($esi)."',
       '".strip_tags($anyotherdeduction)."',
       '".strip_tags($totaldeduction)."' )";

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