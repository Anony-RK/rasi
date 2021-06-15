<?php
require_once('vendor/csvreader/php-excel-reader/excel_reader2.php');
require_once('vendor/csvreader/SpreadsheetReader.php');

if (isset($_POST["taxexcel"]))
{
$allowedFileType = ['application/vnd.ms-excel','text/xls','text/xlsx','application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'];
  
if(in_array($_FILES["taxexcel"]["type"],$allowedFileType)){
	 $targetPath = 'uploads/bulkimport/'.$_FILES['taxexcel']['name'];
        move_uploaded_file($_FILES['taxexcel']['tmp_name'], $targetPath);
        $Reader = new SpreadsheetReader($targetPath);
        $sheetCount = count($Reader->sheets());
        for($i=0;$i<$sheetCount;$i++)
        {
        	$Reader->ChangeSheet($i);
        	foreach ($Reader as $Row){
            $financialyear = "";
            if(isset($Row[0])) {
            $financialyear = mysqli_real_escape_string($conn,$Row[0]);
            }
            $classification = "";
            if(isset($Row[1])) {
            $classification = mysqli_real_escape_string($conn,$Row[1]);
            }
            $description = "";
            if(isset($Row[2])) {
            $description = mysqli_real_escape_string($conn,$Row[2]);
            }
            $tax = "";
            if(isset($Row[3])) {
            $tax = mysqli_real_escape_string($conn,$Row[3]);
            }
            $cess = "";
            if(isset($Row[4])) {
            $cess = mysqli_real_escape_string($conn,$Row[4]);
            }
            $addl = "";
            if(isset($Row[5])) {
            $addl = mysqli_real_escape_string($conn,$Row[5]);
            }
            $total = "";
            if(isset($Row[6])) {
            $total = mysqli_real_escape_string($conn,$Row[6]);
            }
            

             if($i==0 && $financialyear!="financialyear")
				 { 
                   $query = "INSERT INTO taxmaster(
                       financialyear, classification,
                       description, tax, cess,
                          addl, total  ) 
	   VALUES (
	   '".strip_tags($financialyear)."',
	   '".strip_tags($classification)."',
	   '".strip_tags($description)."',
	   '".strip_tags($tax)."',
	   '".strip_tags($cess)."',
	   '".strip_tags($addl)."',
	   '".strip_tags($total)."'
	   )";

       $result = $mysqli->query($query);
              
       if (! empty($result)) {
       $message = "Excel Data Imported into the Database";
       } else {
       $message = "Problem in Importing Excel Data";
       }
}
}
}
}
}
?>