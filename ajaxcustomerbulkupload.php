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
                $customername = "";
                if(isset($Row[0])) {
                $customername = mysqli_real_escape_string($con,$Row[0]);
                }
            $customercode = rand(1000,10000);
            $customercode             = mysqli_real_escape_string($mysqli,$customercode);    
            $gender = "";
            if(isset($Row[1])) {
            $gender = mysqli_real_escape_string($con,$Row[1]);
            }           
            $age = "";
            if(isset($Row[2])) {
            $age = mysqli_real_escape_string($con,$Row[2]);
            }
            $mobilenumber = "";
            if(isset($Row[3])) {
            $mobilenumber = mysqli_real_escape_string($con,$Row[3]);
            }
            $dateofbirth = "";
            if(isset($Row[4])) {
            $dateofbirth = mysqli_real_escape_string($con,$Row[4]);
            }
            $emailid = "";
            if(isset($Row[5])) {
            $emailid = mysqli_real_escape_string($con,$Row[5]);
            }            
            $whatsappnumber = "";
            if(isset($Row[6])) {
            $whatsappnumber = mysqli_real_escape_string($con,$Row[6]);
            }
          
           
            $typeofcustomer = "";
            if(isset($Row[7])) {
            $typeofcustomer = mysqli_real_escape_string($con,$Row[7]);
            }
            $frequencyofvisit = "";
            if(isset($Row[8])) {
            $frequencyofvisit = mysqli_real_escape_string($con,$Row[8]);
            }
            $anniverserydate = "";
            if(isset($Row[9])) {
            $anniverserydate = mysqli_real_escape_string($con,$Row[9]);
            }           
            $needmembership = "";
            if(isset($Row[10])) {
            $needmembership = mysqli_real_escape_string($con,$Row[10]);
            }

            $gstno = "";
            if(isset($Row[11])) {
            $gstno = mysqli_real_escape_string($con,$Row[11]);
            }
            $contactpersion = "";
            if(isset($Row[12])) {
            $contactpersion = mysqli_real_escape_string($con,$Row[12]);
            }
            $address1 = "";
            if(isset($Row[13])) {
            $address1 = mysqli_real_escape_string($con,$Row[13]);
            }
            $address2 = "";
            if(isset($Row[14])) {
            $address2 = mysqli_real_escape_string($con,$Row[14]);
            }
            $pincode = "";
            if(isset($Row[15])) {
            $pincode = mysqli_real_escape_string($con,$Row[15]);
            }
            $district = "";
            if(isset($Row[16])) {
            $district = mysqli_real_escape_string($con,$Row[16]);
            }
            $state = "";
            if(isset($Row[17])) {
            $state = mysqli_real_escape_string($con,$Row[17]);
            }
            $country = "";
            if(isset($Row[18])) {
            $country = mysqli_real_escape_string($con,$Row[18]);
            }

           
            $noofvisit = "";
            if(isset($Row[19])) {
            $noofvisit = mysqli_real_escape_string($con,$Row[19]);
            }
            $frequencyofvisit = "";
            if(isset($Row[20])) {
            $frequencyofvisit = mysqli_real_escape_string($con,$Row[20]);
            }
           

            $subgroup = "";
            if(isset($Row[21])) {
            $subgroup = mysqli_real_escape_string($con,$Row[21]);
            }
            $groups = "";
            if(isset($Row[22])) {
            $groups = mysqli_real_escape_string($con,$Row[22]);
            }
            $ledgername = "";
            if(isset($Row[23])) {
            $ledgername = mysqli_real_escape_string($con,$Row[23]);
            }
        
            $costcenter = "";
            if(isset($Row[24])) {
            $costcenter = mysqli_real_escape_string($con,$Row[24]);
            if(isset($costcenter) &&  $costcenter == 'Yes')		
            {
                $costcenter=0;
            }
            else
            {
                $costcenter=1;
            }
 
            }
            $inventory = "";
            if(isset($Row[25])) {
            $inventory = mysqli_real_escape_string($con,$Row[25]);
            if(isset($inventory) &&    $inventory == 'Yes')		
            {
                $inventory=0;
            }
            else
            {
                $inventory=1;
            }
            }

        if($i==0 && $customername!="Customer Name")
        {       
        $query = "INSERT INTO customer(customercode , customername, gender, dateofbirth,
         age, mobilenumber, whatsappnumber,
        anniverserydate, emailid, needmembership,gstno, contactpersion, address1,
        address2, pincode,district,state,country,typeofcustomer,
         noofvisit, frequencyofvisit,subgroup,groupsnew,ledgername,costcenter,inventory) 
       VALUES (
           '".strip_tags($customercode)."',
       '".strip_tags($customername)."',
       '".strip_tags($gender)."',
       '".strip_tags($dateofbirth)."',      
       '".strip_tags($age)."',
       '".strip_tags($mobilenumber)."',
       '".strip_tags($whatsappnumber)."',
       '".strip_tags($anniverserydate)."',
       '".strip_tags($emailid)."',
       '".strip_tags($needmembership)."',
       '".strip_tags($gstno)."',
       '".strip_tags($contactpersion)."',
       '".strip_tags($address1)."',
       '".strip_tags($address2)."',
       '".strip_tags($pincode)."',
       '".strip_tags($district)."',
       '".strip_tags($state)."',
       '".strip_tags($country)."', 
   
       '".strip_tags($typeofcustomer)."',
       '".strip_tags($noofvisit)."',
       '".strip_tags($frequencyofvisit)."',
   
   
       '".strip_tags($subgroup)."',
       '".strip_tags($groups)."',
       '".strip_tags($ledgername)."',
   
       '".strip_tags($costcenter)."',
       '".strip_tags($inventory)."')";


       $result = $con->query($query);

} 
} 
}  

    if(!empty($result)) {
    echo "Excel Data Imported into the Database !";
    }
    else{
    echo "Problem in Importing Excel Data".$con->error;
    }
 }
else{
    echo "Kindly Select The Excel";
}

}
?>