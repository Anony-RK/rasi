<?php

  class admin 
	{
			

   /* User Details Start */ 
   public function adduser($mysqli) 
   {
	   $date  = date('Y-m-d');
	   if (isset($_POST['fullname'])) {
		$fullname             = mysqli_real_escape_string($mysqli,$_POST['fullname']);		
	}
	   if (isset($_POST['role'])) {
	   $role             = mysqli_real_escape_string($mysqli,$_POST['role']);		
	   }	
	   if (isset($_POST['email'])) {
	   $email               = mysqli_real_escape_string($mysqli,$_POST['email']);		
	   }
	   if (isset($_POST['password'])) {
	   $password               = mysqli_real_escape_string($mysqli,$_POST['password']);		
	   }
	  
	   if(isset($_POST['status']) &&    $_POST['status'] == 'Yes')		
	   {
		   $status=0;
	   }
	   else
	   {
		   $status=1;
	   }
	   $qry = "INSERT INTO user(fullname,user_name,user_password,
	   status) 
	   VALUES ('".strip_tags($fullname)."' ,'".strip_tags($email)."','".strip_tags($password)."',
	   '".strip_tags($status)."');";		
   
	   $res =$mysqli->query($qry)or die("Error in Query".$mysqli->error);
	   $id = 0;
	   $id = $mysqli->insert_id;
   
	   return $id; 
   }
   public function deleteuser($mysqli,$id) 
   {
	   $date  = date('Y-m-d'); 
	   $qry = 'UPDATE  user  SET status="1"  WHERE user_id="'.mysqli_real_escape_string($mysqli,$id).'"'; 
	   $res =$mysqli->query($qry)or die("Error in delete query".$mysqli->error);	
   } 	

	   
   public function getuser($mysqli,$idupd) 
   {
	   $qry = "SELECT * FROM user WHERE user_id='".mysqli_real_escape_string($mysqli,$idupd)."'"; 
	   $res =$mysqli->query($qry)or die("Error in Get All Records".$mysqli->error);
	   $detailrecords = array();
	   if ($mysqli->affected_rows>0)
	   {
		   $row = $res->fetch_object();	
		   $detailrecords['user_id']                    = $row->user_id; 
		   $detailrecords['fullname']       	        = strip_tags($row->fullname);
		   $detailrecords['user_name']       	        = strip_tags($row->user_name);
		   $detailrecords['user_password']              = strip_tags($row->user_password);		  	
		   $detailrecords['status']                     = strip_tags($row->status);		
   
	   }
	   return $detailrecords;
   }
   public function updateuser($mysqli,$id) { 		
	$date  = date('Y-m-d');
	if (isset($_POST['fullname'])) {
		$fullname             = mysqli_real_escape_string($mysqli,$_POST['fullname']);		
	}
	if (isset($_POST['role'])) {
	$role             = mysqli_real_escape_string($mysqli,$_POST['role']);		
	}	
	if (isset($_POST['email'])) {
	$email               = mysqli_real_escape_string($mysqli,$_POST['email']);		
	}
	if (isset($_POST['password'])) {
	$password               = mysqli_real_escape_string($mysqli,$_POST['password']);		
	}	
	if(isset($_POST['status']) &&    $_POST['status'] == 'Yes')		
	{
		$status=0;
	}
	else
	{
		$status=1;
	}
   $updateQry = 'UPDATE  user  SET fullname="'.strip_tags($fullname).'" ,user_name="'.strip_tags($email).'" ,user_password="'.strip_tags($password).'" ,		 
   status="'.$status.'"			
			WHERE user_id="'.mysqli_real_escape_string($mysqli,$id).'"';  

   $res =$mysqli->query($updateQry)or die("Error in in update Query!.".$mysqli->error); 
			
			 
   }	

/* User Details End */ 


/* Branch Details Start */ 
public function addbranch($mysqli) 
{
	
	$date  = date('Y-m-d');
	if (isset($_POST['branchname'])) {
	 $branchname             = mysqli_real_escape_string($mysqli,$_POST['branchname']);		
   }
	if (isset($_POST['address'])) {
	$address             = mysqli_real_escape_string($mysqli,$_POST['address']);		
	}	
	if (isset($_POST['Address1'])) {
	$Address1               = mysqli_real_escape_string($mysqli,$_POST['Address1']);		
	}
	if (isset($_POST['Address2'])) {
	$Address2               = mysqli_real_escape_string($mysqli,$_POST['Address2']);		
	}
   if (isset($_POST['district'])) {
	$district               = mysqli_real_escape_string($mysqli,$_POST['district']);		
	}
	if (isset($_POST['pincode'])) {
	$pincode               = mysqli_real_escape_string($mysqli,$_POST['pincode']);		
	}

	if (isset($_POST['state'])) {
	$state               = mysqli_real_escape_string($mysqli,$_POST['state']);		
	}
	if (isset($_POST['country'])) {
	$country               = mysqli_real_escape_string($mysqli,$_POST['country']);		
	}
	if (isset($_POST['phonenumber'])) {
		$phonenumber               = mysqli_real_escape_string($mysqli,$_POST['phonenumber']);		
	}
	if (isset($_POST['email'])) {
		$email               = mysqli_real_escape_string($mysqli,$_POST['email']);		
	}
	if (isset($_POST['faxnumber'])) {
		$faxnumber               = mysqli_real_escape_string($mysqli,$_POST['faxnumber']);		
	}
	if (isset($_POST['tanno'])) {
		$tanno               = mysqli_real_escape_string($mysqli,$_POST['tanno']);		
	}
	if (isset($_POST['isgst'])) {
		$isgst               = mysqli_real_escape_string($mysqli,$_POST['isgst']);		
	}
	if (isset($_POST['gst'])) {
		$gst               = mysqli_real_escape_string($mysqli,$_POST['gst']);		
	}
	if (isset($_POST['pfno'])) {
		$pfno               = mysqli_real_escape_string($mysqli,$_POST['pfno']);		
	}
	if (isset($_POST['esicno'])) {
		$esicno               = mysqli_real_escape_string($mysqli,$_POST['esicno']);		
	}
	if (isset($_POST['loginshortername'])) {
		$loginshortername               = mysqli_real_escape_string($mysqli,$_POST['loginshortername']);		
	}
	if(isset($_POST['status']) &&    $_POST['status'] == 'Yes')		
	{
		$status=0;
	}
	else
	{
		$status=1;
	}
	$qry = "INSERT INTO branch(branchname,address,address1,address2,district,pincode,
	state,country,phonenumber,email,faxnumber,tanno,isgst,gst,pfno,esicno,loginshortername,
	status) 
	VALUES ('".strip_tags($branchname)."' ,'".strip_tags($address)."','".strip_tags($Address1)."',
	'".strip_tags($Address2)."', '".strip_tags($district)."' ,'".strip_tags($pincode)."','".strip_tags($state)."',
	'".strip_tags($country)."' ,'".strip_tags($phonenumber)."','".strip_tags($email)."',
	'".strip_tags($faxnumber)."' ,'".strip_tags($tanno)."','".strip_tags($isgst)."','".strip_tags($gst)."',
	'".strip_tags($pfno)."' ,'".strip_tags($esicno)."','".strip_tags($loginshortername)."',
	'".strip_tags($status)."');";		

	$res =$mysqli->query($qry)or die("Error in Query".$mysqli->error);
	$id = 0;
	$id = $mysqli->insert_id;

	return $id; 
}
public function deletebranch($mysqli,$id) 
{
	$date  = date('Y-m-d'); 
	$qry = 'UPDATE  branch  SET status="1"  WHERE branchid="'.mysqli_real_escape_string($mysqli,$id).'"'; 
	$res =$mysqli->query($qry)or die("Error in delete query".$mysqli->error);	
} 	

	
public function getbranch($mysqli,$idupd) 
{
	$qry = "SELECT * FROM branch WHERE branchid='".mysqli_real_escape_string($mysqli,$idupd)."'"; 
	$res =$mysqli->query($qry)or die("Error in Get All Records".$mysqli->error);
	$detailrecords = array();
	if ($mysqli->affected_rows>0)
	{
		$row = $res->fetch_object();	

		$detailrecords['branchid']                  = $row->branchid; 
		$detailrecords['branchname']       	        = strip_tags($row->branchname);
		$detailrecords['address']       	        = strip_tags($row->address);
		$detailrecords['address1']                  = strip_tags($row->address1);	
		$detailrecords['address2']                  = strip_tags($row->address2);
		$detailrecords['district']                  = strip_tags($row->district);	
		$detailrecords['pincode']                   = $row->pincode; 
		$detailrecords['state']       	            = strip_tags($row->state);
		$detailrecords['country']       	        = strip_tags($row->country);
		$detailrecords['phonenumber']               = strip_tags($row->phonenumber);

		$detailrecords['email']                     = $row->email; 
		$detailrecords['faxnumber']       	        = strip_tags($row->faxnumber);
		$detailrecords['tanno']       	            = strip_tags($row->tanno);
		$detailrecords['isgst']                       = strip_tags($row->isgst);
		$detailrecords['gst']                       = strip_tags($row->gst);

		$detailrecords['pfno']       	            = strip_tags($row->pfno);
		$detailrecords['esicno']       	            = strip_tags($row->esicno);
		$detailrecords['loginshortername']        = strip_tags($row->loginshortername);

		$detailrecords['status']                    = strip_tags($row->status);		

	}
	return $detailrecords;
}
public function updatebranch($mysqli,$id) { 		
	
	 $date  = date('Y-m-d');
	 if (isset($_POST['branchname'])) {
	  $branchname             = mysqli_real_escape_string($mysqli,$_POST['branchname']);		
	}
	 if (isset($_POST['address'])) {
	 $address             = mysqli_real_escape_string($mysqli,$_POST['address']);		
	 }	
	 if (isset($_POST['Address1'])) {
	 $Address1               = mysqli_real_escape_string($mysqli,$_POST['Address1']);		
	 }
	 if (isset($_POST['Address2'])) {
	 $Address2               = mysqli_real_escape_string($mysqli,$_POST['Address2']);		
	 }
	if (isset($_POST['district'])) {
	 $district               = mysqli_real_escape_string($mysqli,$_POST['district']);		
	 }
	 if (isset($_POST['pincode'])) {
	 $pincode               = mysqli_real_escape_string($mysqli,$_POST['pincode']);		
	 }
 
	 if (isset($_POST['state'])) {
	 $state               = mysqli_real_escape_string($mysqli,$_POST['state']);		
	 }
	 if (isset($_POST['country'])) {
	 $country               = mysqli_real_escape_string($mysqli,$_POST['country']);		
	 }
	 if (isset($_POST['phonenumber'])) {
		 $phonenumber               = mysqli_real_escape_string($mysqli,$_POST['phonenumber']);		
	 }
	 if (isset($_POST['email'])) {
		 $email               = mysqli_real_escape_string($mysqli,$_POST['email']);		
	 }
	 if (isset($_POST['faxnumber'])) {
		 $faxnumber               = mysqli_real_escape_string($mysqli,$_POST['faxnumber']);		
	 }
	 if (isset($_POST['tanno'])) {
		 $tanno               = mysqli_real_escape_string($mysqli,$_POST['tanno']);		
	 }
	 if (isset($_POST['isgst'])) {
		 $isgst               = mysqli_real_escape_string($mysqli,$_POST['isgst']);		
	 }
	 if (isset($_POST['gst'])) {
		 $gst               = mysqli_real_escape_string($mysqli,$_POST['gst']);		
	 }
	 if (isset($_POST['pfno'])) {
		 $pfno               = mysqli_real_escape_string($mysqli,$_POST['pfno']);		
	 }
	 if (isset($_POST['esicno'])) {
		 $esicno               = mysqli_real_escape_string($mysqli,$_POST['esicno']);		
	 }
	 if (isset($_POST['loginshortername'])) {
		 $loginshortername               = mysqli_real_escape_string($mysqli,$_POST['loginshortername']);		
	 }
	 if(isset($_POST['status']) &&    $_POST['status'] == 'Yes')		
	 {
		 $status=0;
	 }
	 else
	 {
		 $status=1;
	 }

	$updateQry = 'UPDATE  branch  SET branchname="'.strip_tags($branchname).'" ,
	address="'.strip_tags($address).'" ,address1="'.strip_tags($Address1).'" ,		
	address2="'.strip_tags($Address2).'" ,district="'.strip_tags($district).'" ,	pincode="'.strip_tags($pincode).'" ,	
	state="'.strip_tags($state).'" ,country="'.strip_tags($country).'" ,	
	phonenumber="'.strip_tags($phonenumber).'" ,email="'.strip_tags($email).'" ,
	faxnumber="'.strip_tags($faxnumber).'" ,tanno="'.strip_tags($tanno).'" ,isgst="'.strip_tags($isgst).'" ,
	gst="'.strip_tags($gst).'" ,pfno="'.strip_tags($pfno).'" ,
	esicno="'.strip_tags($esicno).'" ,loginshortername="'.strip_tags($loginshortername).'" ,	 
	status="'.$status.'" WHERE branchid="'.mysqli_real_escape_string($mysqli,$id).'"';  

$res =$mysqli->query($updateQry)or die("Error in in update Query!.".$mysqli->error); 
		 
		  
}	

/* Branch Details End */ 



/* Company Details Start */ 
public function addcompany($mysqli) 
{
	
	$date  = date('Y-m-d');
	if (isset($_POST['companyname'])) {
	 $companyname             = mysqli_real_escape_string($mysqli,$_POST['companyname']);		
   }
   if (isset($_POST['cinno'])) {
	$cinno             = mysqli_real_escape_string($mysqli,$_POST['cinno']);		
   }
	if (isset($_POST['address'])) {
	$address             = mysqli_real_escape_string($mysqli,$_POST['address']);		
	}	
	if (isset($_POST['Address1'])) {
	$Address1               = mysqli_real_escape_string($mysqli,$_POST['Address1']);		
	}
	if (isset($_POST['Address2'])) {
	$Address2               = mysqli_real_escape_string($mysqli,$_POST['Address2']);		
	}
   
	if (isset($_POST['pincode'])) {
	$pincode               = mysqli_real_escape_string($mysqli,$_POST['pincode']);		
	}
	if (isset($_POST['district'])) {
		$district               = mysqli_real_escape_string($mysqli,$_POST['district']);		
	}
	if (isset($_POST['state'])) {
	$state               = mysqli_real_escape_string($mysqli,$_POST['state']);		
	}
	if (isset($_POST['country'])) {
	$country               = mysqli_real_escape_string($mysqli,$_POST['country']);		
	}
	if (isset($_POST['phonenumber'])) {
		$phonenumber               = mysqli_real_escape_string($mysqli,$_POST['phonenumber']);		
	}	
	if (isset($_POST['faxnumber'])) {
		$faxnumber               = mysqli_real_escape_string($mysqli,$_POST['faxnumber']);		
	}
	if (isset($_POST['email'])) {
		$email               = mysqli_real_escape_string($mysqli,$_POST['email']);		
	}
	if (isset($_POST['website'])) {
		$website               = mysqli_real_escape_string($mysqli,$_POST['website']);		
	}
	if (isset($_POST['panno'])) {
		$panno               = mysqli_real_escape_string($mysqli,$_POST['panno']);		
	}
	if (isset($_POST['itwardcircleno'])) {
		$itwardcircleno               = mysqli_real_escape_string($mysqli,$_POST['itwardcircleno']);		
	}
	if (isset($_POST['tanno'])) {
		$tanno               = mysqli_real_escape_string($mysqli,$_POST['tanno']);		
	}
	if (isset($_POST['isgst'])) {
		$isgst               = mysqli_real_escape_string($mysqli,$_POST['isgst']);		
	}
	if (isset($_POST['gst'])) {
		$gst               = mysqli_real_escape_string($mysqli,$_POST['gst']);		
	}
	if (isset($_POST['pfno'])) {
		$pfno               = mysqli_real_escape_string($mysqli,$_POST['pfno']);		
	}
	if (isset($_POST['esicno'])) {
		$esicno               = mysqli_real_escape_string($mysqli,$_POST['esicno']);		
	}
	if (isset($_POST['loginshortername'])) {
		$loginshortername               = mysqli_real_escape_string($mysqli,$_POST['loginshortername']);		
	}
	if (isset($_POST['booksstartfrom'])) {
		$booksstartfrom               = mysqli_real_escape_string($mysqli,$_POST['booksstartfrom']);		
	}
	if(isset($_POST['status']) &&    $_POST['status'] == 'Yes')		
	{
		$status=0;
	}
	else
	{
		$status=1;
	}

	/* Company Image Upload Start	*/   
	$companyimage =$_FILES["companyimage"]["name"];
	if(isset($companyimage))
	{
		$companyimage3 = "uploads/companyphoto/".$companyimage ;
		move_uploaded_file($_FILES['companyimage']['tmp_name'],$companyimage3);

		
		$companyphoto = rtrim($companyimage, '*'); //imagepath if it is present    
	
	}
	else
	{
	$companyphoto="";
	} 
	

	$qry = "INSERT INTO company(companyname,cinno,address,address1,address2,pincode,district,
	state,country,phonenumber,faxnumber,email,website,panno,itwardcircleno,tanno,isgst,gst,pfno,
	esicno,loginshortername,
	booksstartfrom,companyimagepath,status) 
	VALUES ('".strip_tags($companyname)."' ,'".strip_tags($cinno)."' ,'".strip_tags($address)."',
	'".strip_tags($Address1)."',
	'".strip_tags($Address2)."' ,'".strip_tags($pincode)."',
	'".strip_tags($district)."','".strip_tags($state)."',
	'".strip_tags($country)."' ,'".strip_tags($phonenumber)."','".strip_tags($faxnumber)."' ,
	'".strip_tags($email)."','".strip_tags($website)."','".strip_tags($panno)."',
	'".strip_tags($itwardcircleno)."','".strip_tags($tanno)."','".strip_tags($isgst)."','".strip_tags($gst)."',
	'".strip_tags($pfno)."' ,'".strip_tags($esicno)."','".strip_tags($loginshortername)."',
	'".strip_tags($booksstartfrom)."','".strip_tags($companyphoto)."','".strip_tags($status)."');";		

	$res =$mysqli->query($qry)or die("Error in Query".$mysqli->error);
	$id = 0;
	$id = $mysqli->insert_id;

	return $id; 
}
public function deletecompany($mysqli,$id) 
{
	$date  = date('Y-m-d'); 
	$qry = 'UPDATE  company  SET status="1"  WHERE companyid="'.mysqli_real_escape_string($mysqli,$id).'"'; 
	$res =$mysqli->query($qry)or die("Error in delete query".$mysqli->error);	
} 	

	
public function getcompany($mysqli,$idupd) 
{
	$qry = "SELECT * FROM company WHERE companyid='".mysqli_real_escape_string($mysqli,$idupd)."'"; 
	$res =$mysqli->query($qry)or die("Error in Get All Records".$mysqli->error);
	$detailrecords = array();
	if ($mysqli->affected_rows>0)
	{
		$row = $res->fetch_object();	
		$detailrecords['companyid']                 = $row->companyid; 
		$detailrecords['companyname']       	    = strip_tags($row->companyname);
		$detailrecords['cinno']       	            = strip_tags($row->cinno);
		$detailrecords['address']       	        = strip_tags($row->address);
		$detailrecords['address1']                  = strip_tags($row->address1);	
		$detailrecords['address2']                  = strip_tags($row->address2);	
		$detailrecords['pincode']                   = $row->pincode; 
		$detailrecords['district']       	        = strip_tags($row->district);
		$detailrecords['state']       	            = strip_tags($row->state);
		$detailrecords['country']       	        = strip_tags($row->country);
		$detailrecords['phonenumber']               = strip_tags($row->phonenumber);
		$detailrecords['faxnumber']       	        = strip_tags($row->faxnumber);
		$detailrecords['email']                     = $row->email; 
		$detailrecords['website']       	        = strip_tags($row->website);
		$detailrecords['panno']       	            = strip_tags($row->panno);
		$detailrecords['itwardcircleno']       	    = strip_tags($row->itwardcircleno);
		$detailrecords['tanno']       	            = strip_tags($row->tanno);
		$detailrecords['isgst']                       = strip_tags($row->isgst);
		$detailrecords['gst']                       = strip_tags($row->gst);

		$detailrecords['pfno']       	            = strip_tags($row->pfno);
		$detailrecords['esicno']       	            = strip_tags($row->esicno);
		$detailrecords['loginshortername']          = strip_tags($row->loginshortername);
		$detailrecords['booksstartfrom']            = strip_tags($row->booksstartfrom);
		$detailrecords['companyimagepath']          = strip_tags($row->companyimagepath);
		
		$detailrecords['status']                    = strip_tags($row->status);		

	}
	return $detailrecords;
}
public function updatecompany($mysqli,$id) { 		
	$date  = date('Y-m-d');
	if (isset($_POST['companyname'])) {
	 $companyname             = mysqli_real_escape_string($mysqli,$_POST['companyname']);		
   }
   if (isset($_POST['cinno'])) {
	$cinno             = mysqli_real_escape_string($mysqli,$_POST['cinno']);		
   }
	if (isset($_POST['address'])) {
	$address             = mysqli_real_escape_string($mysqli,$_POST['address']);		
	}	
	if (isset($_POST['Address1'])) {
	$Address1               = mysqli_real_escape_string($mysqli,$_POST['Address1']);		
	}
	if (isset($_POST['Address2'])) {
	$Address2               = mysqli_real_escape_string($mysqli,$_POST['Address2']);		
	}
   
	if (isset($_POST['pincode'])) {
	$pincode               = mysqli_real_escape_string($mysqli,$_POST['pincode']);		
	}
	if (isset($_POST['district'])) {
		$district               = mysqli_real_escape_string($mysqli,$_POST['district']);		
	}
	if (isset($_POST['state'])) {
	$state               = mysqli_real_escape_string($mysqli,$_POST['state']);		
	}
	if (isset($_POST['country'])) {
	$country               = mysqli_real_escape_string($mysqli,$_POST['country']);		
	}
	if (isset($_POST['phonenumber'])) {
		$phonenumber               = mysqli_real_escape_string($mysqli,$_POST['phonenumber']);		
	}	
	if (isset($_POST['faxnumber'])) {
		$faxnumber               = mysqli_real_escape_string($mysqli,$_POST['faxnumber']);		
	}
	if (isset($_POST['email'])) {
		$email               = mysqli_real_escape_string($mysqli,$_POST['email']);		
	}
	if (isset($_POST['website'])) {
		$website               = mysqli_real_escape_string($mysqli,$_POST['website']);		
	}
	if (isset($_POST['panno'])) {
		$panno               = mysqli_real_escape_string($mysqli,$_POST['panno']);		
	}
	if (isset($_POST['itwardcircleno'])) {
		$itwardcircleno               = mysqli_real_escape_string($mysqli,$_POST['itwardcircleno']);		
	}
	if (isset($_POST['tanno'])) {
		$tanno               = mysqli_real_escape_string($mysqli,$_POST['tanno']);		
	}
	if (isset($_POST['isgst'])) {
		$gst               = mysqli_real_escape_string($mysqli,$_POST['gst']);		
	}
	if (isset($_POST['isgst'])) {
		$isgst               = mysqli_real_escape_string($mysqli,$_POST['isgst']);		
	}
	if (isset($_POST['pfno'])) {
		$pfno               = mysqli_real_escape_string($mysqli,$_POST['pfno']);		
	}
	if (isset($_POST['esicno'])) {
		$esicno               = mysqli_real_escape_string($mysqli,$_POST['esicno']);		
	}
	if (isset($_POST['loginshortername'])) {
		$loginshortername               = mysqli_real_escape_string($mysqli,$_POST['loginshortername']);		
	}
	if (isset($_POST['booksstartfrom'])) {
		$booksstartfrom               = mysqli_real_escape_string($mysqli,$_POST['booksstartfrom']);		
	}
	if(isset($_POST['status']) &&    $_POST['status'] == 'Yes')		
	{
		$status=0;
	}
	else
	{
		$status=1;
	}
	
	$updateQry = 'UPDATE  company  SET companyname="'.strip_tags($companyname).'" ,
	cinno="'.strip_tags($cinno).'" ,address="'.strip_tags($address).'" ,address1="'.strip_tags($Address1).'" ,		
	address2="'.strip_tags($Address2).'" ,	pincode="'.strip_tags($pincode).'" ,
	district="'.strip_tags($district).'" ,
	state="'.strip_tags($state).'" ,country="'.strip_tags($country).'" ,	
	phonenumber="'.strip_tags($phonenumber).'" ,faxnumber="'.strip_tags($faxnumber).'" ,
	email="'.strip_tags($email).'" ,website="'.strip_tags($website).'" ,
	panno="'.strip_tags($panno).'" ,itwardcircleno="'.strip_tags($itwardcircleno).'" ,
	tanno="'.strip_tags($tanno).'" ,isgst="'.strip_tags($gst).'" ,isgst="'.strip_tags($gst).'" ,pfno="'.strip_tags($pfno).'" ,
	esicno="'.strip_tags($esicno).'" ,loginshortername="'.strip_tags($loginshortername).'" ,
	booksstartfrom="'.strip_tags($booksstartfrom).'" ,
	status="'.$status.'" WHERE companyid="'.mysqli_real_escape_string($mysqli,$id).'"';  

$res =$mysqli->query($updateQry)or die("Error in in update Query!.".$mysqli->error); 
		 
		  
}	

/* Company Details End */ 

/* Item Operations Start */ 
/* Item Details Add */ 

public function additem($mysqli) 
   {
	   $date  = date('Y-m-d');

	   if (isset($_POST['partnumber'])) {
		$partnumber             = mysqli_real_escape_string($mysqli,$_POST['partnumber']);
	   }
	   if (isset($_POST['stocktype'])) {
	   $stocktype             = mysqli_real_escape_string($mysqli,$_POST['stocktype']);		
	   }	
	   if (isset($_POST['itemname'])) {
	   $itemname               = mysqli_real_escape_string($mysqli,$_POST['itemname']);		
	   }
	   if (isset($_POST['unitofmeasure'])) {
	   $unitofmeasure               = mysqli_real_escape_string($mysqli,$_POST['unitofmeasure']);		
	   }
	   if (isset($_POST['hsncode'])) {
		$hsncode             = mysqli_real_escape_string($mysqli,$_POST['hsncode']);
	   }
	   if (isset($_POST['gstrate'])) {
	   $gstrate             = mysqli_real_escape_string($mysqli,$_POST['gstrate']);		
	   }	
	   if (isset($_POST['barcode'])) {
	   $barcode               = mysqli_real_escape_string($mysqli,$_POST['barcode']);		
	   }
	   if (isset($_POST['vendor'])) {
	   $vendor               = mysqli_real_escape_string($mysqli,$_POST['vendor']);		
	   }
	   if (isset($_POST['type'])) {
	   $type               = mysqli_real_escape_string($mysqli,$_POST['type']);		
	   }
	   if (isset($_POST['noofgmpcs'])) {
		$noofgmpcs             = mysqli_real_escape_string($mysqli,$_POST['noofgmpcs']);
	   }
	   if (isset($_POST['reorderlevel'])) {
	   $reorderlevel             = mysqli_real_escape_string($mysqli,$_POST['reorderlevel']);		
	   }	
	   if (isset($_POST['lowerlevelqty'])) {
	   $lowerlevelqty               = mysqli_real_escape_string($mysqli,$_POST['lowerlevelqty']);		
	   }
	   if (isset($_POST['isincentive'])) {
	   $isincentive               = mysqli_real_escape_string($mysqli,$_POST['isincentive']);
	   }
	   if (isset($_POST['isreuse'])) {
	   $isreuse               = mysqli_real_escape_string($mysqli,$_POST['isreuse']);
	   }
	   if (isset($_POST['tablevendorselect'])) {
	   $tablevendorselect               = $_POST['tablevendorselect'];
	   $tablevendorselect = implode(',', $tablevendorselect);
	   }
	   $tableopeningstock = "";
	   if (isset($_POST['tableopeningstock'])) {
	   $tableopeningstock               = $_POST['tableopeningstock'];
	   $tableopeningstock = implode(',', $tableopeningstock);
	   }
	   $tableopeningpcs = "";
	   if (isset($_POST['tableopeningpcs'])) {
	   $tableopeningpcs               = $_POST['tableopeningpcs'];
	   $tableopeningpcs = implode(',', $tableopeningpcs);
	   }
	   $tablecostperunit="";
	   if (isset($_POST['tablecostperunit'])) {
	   $tablecostperunit               = $_POST['tablecostperunit'];
	   $tablecostperunit = implode(',', $tablecostperunit);
	   }
	   $tablecostprice ="";
	   if (isset($_POST['tablecostprice'])) {
	   $tablecostprice               = $_POST['tablecostprice'];
	   $tablecostprice = implode(',', $tablecostprice);
	   }
	   $tablesellingpriceperpc="";
	   if (isset($_POST['tablesellingpriceperpc'])) {
	   $tablesellingpriceperpc   = $_POST['tablesellingpriceperpc'];
	   $tablesellingpriceperpc = implode(',', $tablesellingpriceperpc);
	   }
	   $tabletotalsellingprice ="";
	   if (isset($_POST['tabletotalsellingprice'])) {
	   $tabletotalsellingprice  = $_POST['tabletotalsellingprice'];
	   $tabletotalsellingprice = implode(',', $tabletotalsellingprice);
	   }
	   if(isset($_POST['status']) &&    $_POST['status'] == 'Yes')		
	   {
		   $status=0;
	   }
	   else
	   {
		   $status=1;
	   }

	   $qry = "INSERT INTO item(partnumber, stocktype, itemname, unitofmeasure, hsncode, gstrate, barcode, vendor, type, noofgmpcs, reorderlevel, lowerlevelqty, isincentive, isreuse, tablevendorselect, tableopeningstock, tableopeningpcs, tablecostperunit, tablecostprice, tablesellingpriceperpc, tabletotalsellingprice, status) 
	   VALUES ('".strip_tags($partnumber)."',
	   '".strip_tags($stocktype)."',
	   '".strip_tags($itemname)."',
	   '".strip_tags($unitofmeasure)."',
	   '".strip_tags($hsncode)."',
	   '".strip_tags($gstrate)."',
	   '".strip_tags($barcode)."',
	   '".strip_tags($vendor)."',
	   '".strip_tags($type)."',
	   '".strip_tags($noofgmpcs)."',
	   '".strip_tags($reorderlevel)."',
	   '".strip_tags($lowerlevelqty)."',
	   '".strip_tags($isincentive)."',
	   '".strip_tags($isreuse)."',
	   '".strip_tags($tablevendorselect)."',
	   '".strip_tags($tableopeningstock)."',
	   '".strip_tags($tableopeningpcs)."',
	   '".strip_tags($tablecostperunit)."',
	   '".strip_tags($tablecostprice)."',
	   '".strip_tags($tablesellingpriceperpc)."',
	   '".strip_tags($tabletotalsellingprice)."',
	   '".strip_tags($status)."');";		
   
	   $res =$mysqli->query($qry)or die("Error in Query".$mysqli->error);
	   $id = 0;
	   $id = $mysqli->insert_id;
   
	   return $id; 
   }



   public function deleteitem($mysqli,$id) 
   {
	   $date  = date('Y-m-d'); 
	   $qry = 'UPDATE  item  SET status="1"  WHERE itemid="'.mysqli_real_escape_string($mysqli,$id).'"'; 
	   $res =$mysqli->query($qry)or die("Error in delete query".$mysqli->error);	
   }

//Update Item


public function updateitem($mysqli,$id){

	   $date  = date('Y-m-d');

	   if (isset($_POST['partnumber'])) {
		$partnumber             = mysqli_real_escape_string($mysqli,$_POST['partnumber']);
	   }
	   if (isset($_POST['stocktype'])) {
	   $stocktype             = mysqli_real_escape_string($mysqli,$_POST['stocktype']);		
	   }	
	   if (isset($_POST['itemname'])) {
	   $itemname               = mysqli_real_escape_string($mysqli,$_POST['itemname']);		
	   }
	   if (isset($_POST['unitofmeasure'])) {
	   $unitofmeasure               = mysqli_real_escape_string($mysqli,$_POST['unitofmeasure']);		
	   }
	   if (isset($_POST['hsncode'])) {
		$hsncode             = mysqli_real_escape_string($mysqli,$_POST['hsncode']);
	   }
	   if (isset($_POST['gstrate'])) {
	   $gstrate             = mysqli_real_escape_string($mysqli,$_POST['gstrate']);		
	   }	
	   if (isset($_POST['barcode'])) {
	   $barcode               = mysqli_real_escape_string($mysqli,$_POST['barcode']);		
	   }
	   if (isset($_POST['vendor'])) {
	   $vendor               = mysqli_real_escape_string($mysqli,$_POST['vendor']);		
	   }
	   if (isset($_POST['type'])) {
	   $type               = mysqli_real_escape_string($mysqli,$_POST['type']);		
	   }
	   if (isset($_POST['noofgmpcs'])) {
		$noofgmpcs             = mysqli_real_escape_string($mysqli,$_POST['noofgmpcs']);
	   }
	   if (isset($_POST['reorderlevel'])) {
	   $reorderlevel             = mysqli_real_escape_string($mysqli,$_POST['reorderlevel']);		
	   }	
	   if (isset($_POST['lowerlevelqty'])) {
	   $lowerlevelqty               = mysqli_real_escape_string($mysqli,$_POST['lowerlevelqty']);		
	   }
	   if (isset($_POST['isincentive'])) {
	   $isincentive               = mysqli_real_escape_string($mysqli,$_POST['isincentive']);
	   }
	   if (isset($_POST['isreuse'])) {
	   $isreuse               = mysqli_real_escape_string($mysqli,$_POST['isreuse']);
	   }
	   $tablevendorselect="";
	   if (isset($_POST['tablevendorselect'])) {
	   $tablevendorselect  = $_POST['tablevendorselect'];
	   $tablevendorselect = implode(',', $tablevendorselect);
	   }
	   $tableopeningstock ="";
	   if (isset($_POST['tableopeningstock'])) {
	   $tableopeningstock    = $_POST['tableopeningstock'];
	   $tableopeningstock = implode(',', $tableopeningstock);
	   }
	   $tableopeningpcs="";
	   if (isset($_POST['tableopeningpcs'])) {
	   $tableopeningpcs      = $_POST['tableopeningpcs'];
	   $tableopeningpcs = implode(',', $tableopeningpcs);
	   }
	   $tablecostperunit ="";
	   if (isset($_POST['tablecostperunit'])) {
	   $tablecostperunit     = $_POST['tablecostperunit'];
	   $tablecostperunit = implode(',', $tablecostperunit);
	   }
	   $tablecostprice="";
	   if (isset($_POST['tablecostprice'])) {
	   $tablecostprice     = $_POST['tablecostprice'];
	   $tablecostprice = implode(',', $tablecostprice);
	   }
	   $tablesellingpriceperpc="";
	   if (isset($_POST['tablesellingpriceperpc'])) {
	   $tablesellingpriceperpc   = $_POST['tablesellingpriceperpc'];
	   $tablesellingpriceperpc = implode(',', $tablesellingpriceperpc);
	   }
	   $tabletotalsellingprice ="";
	   if (isset($_POST['tabletotalsellingprice'])) {
	   $tabletotalsellingprice      = $_POST['tabletotalsellingprice'];
	   $tabletotalsellingprice = implode(',', $tabletotalsellingprice);
	   }
	   if(isset($_POST['status']) &&    $_POST['status'] == 'Yes')		
	   {
		   $status=0;
	   }
	   else
	   {
		   $status=1;
	   }


	$updateQry = 'UPDATE  item  SET 
	partnumber="'.strip_tags($partnumber).'" ,
	stocktype="'.strip_tags($stocktype).'" ,
	itemname="'.strip_tags($itemname).'" ,
	unitofmeasure="'.strip_tags($unitofmeasure).'" ,	
	hsncode="'.strip_tags($hsncode).'" ,	
	gstrate="'.strip_tags($gstrate).'" ,
	barcode="'.strip_tags($barcode).'" ,	
	vendor="'.strip_tags($vendor).'", 
	type="'.strip_tags($type).'" ,
	noofgmpcs="'.strip_tags($noofgmpcs).'" ,
	reorderlevel="'.strip_tags($reorderlevel).'" ,
	lowerlevelqty="'.strip_tags($lowerlevelqty).'" ,
	isincentive="'.strip_tags($isincentive).'" ,
	isreuse="'.strip_tags($isreuse).'" ,
	tablevendorselect="'.strip_tags($tablevendorselect).'",
	tableopeningstock="'.strip_tags($tableopeningstock).'" ,	
	tableopeningpcs="'.strip_tags($tableopeningpcs).'" , 
	tablecostperunit="'.strip_tags($tablecostperunit).'" ,
	tablecostprice="'.strip_tags($tablecostprice).'" ,
	tablesellingpriceperpc="'.strip_tags($tablesellingpriceperpc).'" ,
	tabletotalsellingprice="'.strip_tags($tabletotalsellingprice).'" ,
	status="'.$status.'" WHERE itemid="'.mysqli_real_escape_string($mysqli,$id).'"';  

$res =$mysqli->query($updateQry)or die("Error in in update Query!.".$mysqli->error); 
}

public function getitem($mysqli,$idupd)
   {
	   $qry = "SELECT * FROM item WHERE itemid='".mysqli_real_escape_string($mysqli,$idupd)."'"; 
	   $res =$mysqli->query($qry)or die("Error in Get All Records".$mysqli->error);
	   $detailrecords = array();
	   if ($mysqli->affected_rows>0)
	   {
		   $row = $res->fetch_object();	
		   $detailrecords['itemid']                    = $row->itemid; 
		   $detailrecords['partnumber']       	       = strip_tags($row->partnumber);
		   $detailrecords['stocktype']       	       = strip_tags($row->stocktype);
		   $detailrecords['itemname']                  = strip_tags($row->itemname);		  	
		   $detailrecords['unitofmeasure']             = strip_tags($row->unitofmeasure);		
		   $detailrecords['hsncode']       	           = strip_tags($row->hsncode);
		   $detailrecords['gstrate']       	           = strip_tags($row->gstrate);
		   $detailrecords['barcode']                   = strip_tags($row->barcode);		  	
		   $detailrecords['vendor']                    = strip_tags($row->vendor);	
		   $detailrecords['type']       	           = strip_tags($row->type);
		   $detailrecords['noofgmpcs']       	       = strip_tags($row->noofgmpcs);
		   $detailrecords['reorderlevel']              = strip_tags($row->reorderlevel);		  	
		   $detailrecords['lowerlevelqty']             = strip_tags($row->lowerlevelqty);	
		   $detailrecords['isincentive']       	       = strip_tags($row->isincentive);
		   $detailrecords['isreuse']       	           = strip_tags($row->isreuse);
		   $detailrecords['tablevendorselect']         = strip_tags($row->tablevendorselect);		  	
		   $detailrecords['tableopeningstock']         = strip_tags($row->tableopeningstock);
		   $detailrecords['tableopeningpcs']           = strip_tags($row->tableopeningpcs);		  	
		   $detailrecords['tablecostperunit']          = strip_tags($row->tablecostperunit);
		   $detailrecords['tablecostprice']            = strip_tags($row->tablecostprice);		  	
		   $detailrecords['tablesellingpriceperpc']    = strip_tags($row->tablesellingpriceperpc);
		   $detailrecords['tabletotalsellingprice']    = strip_tags($row->tabletotalsellingprice);
		   $detailrecords['status']                    = strip_tags($row->status);		
   
	   }
	   return $detailrecords;
   }
   // Employee Master

   public function addemployeemaster($mysqli) {
	if(isset($_POST['employeecode']))		
		{
		$employeecode = $_POST['employeecode'];
		}
	if(isset($_POST['employeename']))		
		{
		$employeename = $_POST['employeename'];
		}
	if(isset($_POST['dateofbirth']))		
	{
		$dateofbirth = $_POST['dateofbirth'];
	}
	if(isset($_POST['gender']))		
		{
		$gender = $_POST['gender'];
		}
		if(isset($_POST['email']))		
		{
		$email = $_POST['email'];
		}
		if(isset($_POST['designation']))		
		{
		$designation = $_POST['designation'];
		}
		if(isset($_POST['mobilenumber']))		
		{
		$mobilenumber = $_POST['mobilenumber'];
		}
		if(isset($_POST['dateofjoining']))		
		{
		$dateofjoining = $_POST['dateofjoining'];
		}
		
	if(isset($_POST['contact']))		
	{
	$contact = $_POST['contact'];
	}
	if(isset($_POST['employeeimage']))		
	{
	$employeeimage = $_POST['employeeimage'];
	}
	if(isset($_POST['expertise']))		
	{
	$expertise = $_POST['expertise'];
	}
	if(isset($_POST['starrating']))		
	{
	$starrating = $_POST['starrating'];
	}
	if(isset($_POST['basic']))		
	{
	$basic = $_POST['basic'];
	}
	if(isset($_POST['hra']))		
	{
	$hra = $_POST['hra'];
	}
	if(isset($_POST['conveyance']))		
	{
	$conveyance = $_POST['conveyance'];
	}
	if(isset($_POST['allowance']))		
	{
	$allowance = $_POST['allowance'];
	}
	
	if(isset($_POST['incentivepercent']))		
		{
		$incentivepercent = $_POST['incentivepercent'];
		}
	if(isset($_POST['grosspay']))		
		{
		$grosspay = $_POST['grosspay'];
		}
	if(isset($_POST['tds']))		
	{
		$tds = $_POST['tds'];
	}
	if(isset($_POST['pf']))		
		{
		$pf = $_POST['pf'];
		}
		if(isset($_POST['esi']))		
		{
		$esi = $_POST['esi'];
		}
		if(isset($_POST['loans']))		
		{
		$loans = $_POST['loans'];
		}
		if(isset($_POST['salaryadvance']))		
		{
		$salaryadvance = $_POST['salaryadvance'];
		}
		if(isset($_POST['totaldeduction']))		
		{
		$totaldeduction = $_POST['totaldeduction'];
		}
		
	if(isset($_POST['anyotherdeduction']))		
	{
	$anyotherdeduction = $_POST['anyotherdeduction'];
	}
	if(isset($_POST['institutetype1']))		
	{
	$institutetype1 = $_POST['institutetype1'];
	}
	if(isset($_POST['name1']))		
	{
	$name1 = $_POST['name1'];
	}
	if(isset($_POST['positionheld1']))		
	{
	$positionheld1 = $_POST['positionheld1'];
	}
	if(isset($_POST['place1']))		
	{
	$place1 = $_POST['place1'];
	}
	if(isset($_POST['fromperiod1']))		
	{
	$fromperiod1 = $_POST['fromperiod1'];
	}
	if(isset($_POST['toperiod1']))		
	{
	$toperiod1 = $_POST['toperiod1'];
	}
	if(isset($_POST['date1']))		
	{
	$date1 = $_POST['date1'];
	}
	
	
	if(isset($_POST['institutetype2']))		
	{
	$institutetype2 = $_POST['institutetype2'];
	}
	if(isset($_POST['name2']))		
	{
	$name2= $_POST['name2'];
	}
	if(isset($_POST['positionheld2']))		
	{
	$positionheld2 = $_POST['positionheld2'];
	}
	if(isset($_POST['place2']))		
	{
	$place2 = $_POST['place2'];
	}
	if(isset($_POST['fromperiod2']))		
	{
	$fromperiod2 = $_POST['fromperiod2'];
	}
	if(isset($_POST['toperiod2']))		
	{
	$toperiod2 = $_POST['toperiod2'];
	}
	if(isset($_POST['date2']))		
	{
	$date2 = $_POST['date2'];
	}
	
	
	
	if(isset($_POST['institutetype3']))		
	{
	$institutetype3 = $_POST['institutetype3'];
	}
	if(isset($_POST['name3']))		
	{
	$name3 = $_POST['name3'];
	}
	if(isset($_POST['positionheld3']))		
	{
	$positionheld3 = $_POST['positionheld3'];
	}
	if(isset($_POST['place3']))		
	{
	$place3 = $_POST['place3'];
	}
	if(isset($_POST['fromperiod3']))		
	{
	$fromperiod3 = $_POST['fromperiod3'];
	}
	if(isset($_POST['toperiod3']))		
	{
	$toperiod3 = $_POST['toperiod3'];
	}
	if(isset($_POST['date3']))		
	{
	$date3 = $_POST['date3'];
	}
		
	
	
	
	
	if(isset($_POST['institutetype4']))		
	{
	$institutetype4 = $_POST['institutetype4'];
	}
	if(isset($_POST['name4']))		
	{
	$name4 = $_POST['name4'];
	}
	if(isset($_POST['positionheld4']))		
	{
	$positionheld4 = $_POST['positionheld4'];
	}
	if(isset($_POST['place4']))		
	{
	$place4 = $_POST['place4'];
	}
	if(isset($_POST['fromperiod4']))		
	{
	$fromperiod4 = $_POST['fromperiod4'];
	}
	if(isset($_POST['toperiod4']))		
	{
	$toperiod4 = $_POST['toperiod4'];
	}
	if(isset($_POST['date4']))		
	{
	$date4 = $_POST['date4'];
	}
	
	
	
	
	if(isset($_POST['institutetype5']))		
	{
	$institutetype5 = $_POST['institutetype5'];
	}
	if(isset($_POST['name5']))		
	{
	$name5 = $_POST['name5'];
	}
	if(isset($_POST['positionheld5']))		
	{
	$positionheld5 = $_POST['positionheld5'];
	}
	if(isset($_POST['place5']))		
	{
	$place5 = $_POST['place5'];
	}
	if(isset($_POST['fromperiod5']))		
	{
	$fromperiod5 = $_POST['fromperiod5'];
	}
	if(isset($_POST['toperiod5']))		
	{
	$toperiod5 = $_POST['toperiod5'];
	}
	if(isset($_POST['date5']))		
	{
	$date5 = $_POST['date5'];
	}
	if(isset($_POST['title1']))		
	{
	$title1 = $_POST['title1'];
	}
	if(isset($_POST['certificate1']))		
	{
	$certificate1 = $_POST['certificate1'];
	}
	if(isset($_POST['title2']))		
	{
	$title2 = $_POST['title2'];
	}
	if(isset($_POST['certificate2']))		
	{
    $certificate2 = $_POST['certificate2'];
	}
	if(isset($_POST['title3']))		
	{
	$title3 = $_POST['title3'];
	}
	if(isset($_POST['certificate3']))		
	{
	$certificate3 = $_POST['certificate3'];
	}
	
	if(isset($_POST['title4']))		
	{
	$title4 = $_POST['title4'];
	}
	if(isset($_POST['certificate4']))		
	{
	$certificate4 = $_POST['certificate4'];
	}
	
	if(isset($_POST['title5']))		
	{
	$title5 = $_POST['title5'];
	}
	if(isset($_POST['certificate5']))		
	{
	$certificate5 = $_POST['certificate5'];
	}
	if(isset($_POST['status']) &&    $_POST['status'] == 'Yes')		
	{
		$status=0;
	}
	else
	{
		$status=1;
	}

// Employee Image Upload
	$employeeimage = $_FILES['employeeimage']['name'];
	$employeeimage_tmp = $_FILES['employeeimage']['tmp_name'];
	$employeeimagefolder="uploads/employeefiles/".$employeeimage ;
	move_uploaded_file($employeeimage_tmp, $employeeimagefolder);

// Certficate 1
	$certificate1 = $_FILES['certificate1']['name'];
	$certificate1_tmp = $_FILES['certificate1']['tmp_name'];
	$certificate1folder ="uploads/employeefiles/".$certificate1 ;
	move_uploaded_file($certificate1_tmp, $certificate1folder);

// Certficate 2
	$certificate2 = $_FILES['certificate2']['name'];
	$certificate2_tmp = $_FILES['certificate2']['tmp_name'];
	$certificate2folder ="uploads/employeefiles/".$certificate2 ;
	move_uploaded_file($certificate2_tmp, $certificate2folder);

// Certficate 3
	$certificate3 = $_FILES['certificate3']['name'];
	$certificate3_tmp = $_FILES['certificate3']['tmp_name'];
	$certificate3folder ="uploads/employeefiles/".$certificate3;
	move_uploaded_file($certificate3_tmp, $certificate3folder);

// Certficate 3
	$certificate4 = $_FILES['certificate4']['name'];
	$certificate4_tmp = $_FILES['certificate4']['tmp_name'];
	$certificate4folder ="uploads/employeefiles/".$certificate4;
	move_uploaded_file($certificate4_tmp, $certificate4folder);

// Certficate 3
	$certificate5 = $_FILES['certificate5']['name'];
	$certificate5_tmp = $_FILES['certificate5']['tmp_name'];
	$certificate5folder ="uploads/employeefiles/".$certificate5;
	move_uploaded_file($certificate5_tmp, $certificate5folder);


		$qry = "INSERT INTO employee( employeecode, employeename,
		 dateofbirth, 
		gender, email, designation, mobilenumber, dateofjoining, contact, employeeimage,
		 expertise, starrating, basic, hra, conveyance, allowance, incentivepercent, grosspay,
		tds, pf, esi, loans, salaryadvance, totaldeduction, anyotherdeduction, institutetype1,
		name1, positionheld1, place1, fromperiod1, toperiod1, date1, institutetype2, name2, 
		positionheld2, place2, fromperiod2, toperiod2, date2, institutetype3, name3, positionheld3,
		 place3, fromperiod3, toperiod3, date3, institutetype4, name4, positionheld4, place4,
		fromperiod4, toperiod4, date4, institutetype5, name5, positionheld5, place5, fromperiod5,
	   toperiod5, date5, title1, certificate1, title2, certificate2, title3, certificate3,
		title4, certificate4, title5, certificate5,status) VALUES (
		'".strip_tags($employeecode)."',
		'".strip_tags($employeename)."',
		'".strip_tags($dateofbirth)."',
		'".strip_tags($gender)."',
		'".strip_tags($email)."',
		'".strip_tags($designation)."',
		'".strip_tags($mobilenumber)."',
		'".strip_tags($dateofjoining)."',
		'".strip_tags($contact)."',
		'".strip_tags($employeeimage)."',
		'".strip_tags($expertise)."',
		'".strip_tags($starrating)."',
		'".strip_tags($basic)."',
		'".strip_tags($hra)."',
		'".strip_tags($conveyance)."',
		'".strip_tags($allowance)."',
		'".strip_tags($incentivepercent)."',
		'".strip_tags($grosspay)."',
		'".strip_tags($tds)."',
		'".strip_tags($pf)."',
		'".strip_tags($esi)."',
		'".strip_tags($loans)."',
		'".strip_tags($salaryadvance)."',
		'".strip_tags($totaldeduction)."',
		'".strip_tags($anyotherdeduction)."',
	
		'".strip_tags($institutetype1)."',
		'".strip_tags($name1)."',
		'".strip_tags($positionheld1)."',
		'".strip_tags($place1)."',
		'".strip_tags($fromperiod1)."',
		'".strip_tags($toperiod1)."',
		'".strip_tags($date1)."',
	
		'".strip_tags($institutetype2)."',
		'".strip_tags($name2)."',
		'".strip_tags($positionheld2)."',
		'".strip_tags($place2)."',
		'".strip_tags($fromperiod2)."',
		'".strip_tags($toperiod2)."',
		'".strip_tags($date2)."',
	
		'".strip_tags($institutetype3)."',
		'".strip_tags($name3)."',
		'".strip_tags($positionheld3)."',
		'".strip_tags($place3)."',
		'".strip_tags($fromperiod3)."',
		'".strip_tags($toperiod3)."',
		'".strip_tags($date3)."',
	
		'".strip_tags($institutetype4)."',
		'".strip_tags($name4)."',
		'".strip_tags($positionheld4)."',
		'".strip_tags($place4)."',
		'".strip_tags($fromperiod4)."',
		'".strip_tags($toperiod4)."',
		'".strip_tags($date4)."',
	
		'".strip_tags($institutetype5)."',
		'".strip_tags($name5)."',
		'".strip_tags($positionheld5)."',
		'".strip_tags($place5)."',
		'".strip_tags($fromperiod5)."',
		'".strip_tags($toperiod5)."',
		'".strip_tags($date5)."',
	
	
		'".strip_tags($title1)."',
		'".strip_tags($certificate1)."',
		'".strip_tags($title2)."',
		'".strip_tags($certificate2)."',
		'".strip_tags($title3)."',
		'".strip_tags($certificate3)."',
		'".strip_tags($title4)."',
		'".strip_tags($certificate4)."',
		'".strip_tags($title5)."',
		'".strip_tags($certificate5)."',
		'".strip_tags($status)."'
	
		
		);";

		$res =$mysqli->query($qry)or die("Error in Query".$mysqli->error);
		$id = 0;
		$id = $mysqli->insert_id;
		return $id; 
		
		}
	/*End Employee ADD*/


	/*Delete Employee master*/
		public function deleteemployeemaster($mysqli,$id) 
		{
			$date  = date('Y-m-d'); 
			$qry = 'UPDATE  employee  SET status="1"  WHERE employeeid="'.mysqli_real_escape_string($mysqli,$id).'"'; 
			$res =$mysqli->query($qry)or die("Error in delete query".$mysqli->error);	
		} 	
	 /*End Delete Employee*/


	 /*GET Employeemaster*/

	    
	 public function getemployeemaster($mysqli,$idupd) 
	 {
		 $qry = "SELECT * FROM employee WHERE employeeid='".mysqli_real_escape_string($mysqli,$idupd)."'"; 
		 $res =$mysqli->query($qry)or die("Error in Get All Records".$mysqli->error);
		 $detailrecords = array();
		 if ($mysqli->affected_rows>0)
		 {
			 $row = $res->fetch_object();	
			 $detailrecords['employeeid']                    = $row->employeeid; 
			 $detailrecords['employeecode']       	        = strip_tags($row->employeecode);
			 $detailrecords['employeename']       	        = strip_tags($row->employeename);
			 $detailrecords['dateofbirth']              = strip_tags($row->dateofbirth);		  	
			 $detailrecords['gender']                     = strip_tags($row->gender);	
			 $detailrecords['email']                    = strip_tags($row->email); 
			 $detailrecords['designation']       	        = strip_tags($row->designation);
			 $detailrecords['mobilenumber']       	        = strip_tags($row->mobilenumber);
			 $detailrecords['dateofjoining']              = strip_tags($row->dateofjoining);		  	
			 $detailrecords['contact']                     = strip_tags($row->contact);		
			 $detailrecords['employeeimage']                    =strip_tags( $row->employeeimage); 
			 $detailrecords['expertise']       	        = strip_tags($row->expertise);
			 $detailrecords['starrating']       	        = strip_tags($row->starrating);
			 $detailrecords['basic']              = strip_tags($row->basic);		  	
			 $detailrecords['hra']                     = strip_tags($row->hra);	
			 $detailrecords['conveyance']                    = strip_tags($row->conveyance); 
			 $detailrecords['allowance']       	        = strip_tags($row->allowance);
			 $detailrecords['incentivepercent']       	        = strip_tags($row->incentivepercent);
			 $detailrecords['grosspay']              = strip_tags($row->grosspay);		  	
			 $detailrecords['tds']                     = strip_tags($row->tds);	
			 $detailrecords['pf']                    = strip_tags($row->pf); 
			 $detailrecords['esi']       	        = strip_tags($row->esi);
			 $detailrecords['loans']       	        = strip_tags($row->loans);
			 $detailrecords['salaryadvance']              = strip_tags($row->salaryadvance);		  	
			 $detailrecords['totaldeduction']                     = strip_tags($row->totaldeduction);	
			 $detailrecords['anyotherdeduction']                    = strip_tags($row->anyotherdeduction); 


			 $detailrecords['institutetype1']       	        = strip_tags($row->institutetype1);
			 $detailrecords['name1']       	        = strip_tags($row->name1);
			 $detailrecords['positionheld1']              = strip_tags($row->positionheld1);		  	
			 $detailrecords['place1']                     = strip_tags($row->place1);	
			 $detailrecords['fromperiod1']                    = strip_tags($row->fromperiod1); 
			 $detailrecords['toperiod1']       	        = strip_tags($row->toperiod1);
			 $detailrecords['date1']       	        = strip_tags($row->date1);


			 $detailrecords['institutetype2']       	        = strip_tags($row->institutetype2);
			 $detailrecords['name2']       	        = strip_tags($row->name2);
			 $detailrecords['positionheld2']              = strip_tags($row->positionheld2);		  	
			 $detailrecords['place2']                     = strip_tags($row->place2);	
			 $detailrecords['fromperiod2']                    = strip_tags($row->fromperiod2); 
			 $detailrecords['toperiod2']       	        = strip_tags($row->toperiod2);
			 $detailrecords['date2']       	        = strip_tags($row->date2);

			 $detailrecords['institutetype3']       	        = strip_tags($row->institutetype3);
			 $detailrecords['name3']       	        = strip_tags($row->name3);
			 $detailrecords['positionheld3']              = strip_tags($row->positionheld3);		  	
			 $detailrecords['place3']                     = strip_tags($row->place3);	
			 $detailrecords['fromperiod3']                    = strip_tags($row->fromperiod3); 
			 $detailrecords['toperiod3']       	        = strip_tags($row->toperiod3);
			 $detailrecords['date3']       	        = strip_tags($row->date3);

			 $detailrecords['institutetype4']       	        = strip_tags($row->institutetype4);
			 $detailrecords['name4']       	        = strip_tags($row->name1);
			 $detailrecords['positionheld4']              = strip_tags($row->positionheld4);		  	
			 $detailrecords['place4']                     = strip_tags($row->place4);	
			 $detailrecords['fromperiod4']                    = strip_tags($row->fromperiod4); 
			 $detailrecords['toperiod4']       	        = strip_tags($row->toperiod4);
			 $detailrecords['date4']       	        = strip_tags($row->date4);

			 $detailrecords['institutetype5']       	        = strip_tags($row->institutetype5);
			 $detailrecords['name5']       	        = strip_tags($row->name5);
			 $detailrecords['positionheld5']              = strip_tags($row->positionheld5);		  	
			 $detailrecords['place5']                     = strip_tags($row->place5);	
			 $detailrecords['fromperiod5']                    = strip_tags($row->fromperiod5); 
			 $detailrecords['toperiod5']       	        = strip_tags($row->toperiod5);
			 $detailrecords['date5']       	        = strip_tags($row->date5);


			 $detailrecords['toperiod1']       	        = strip_tags($row->toperiod1);
			 $detailrecords['date1']       	        = strip_tags($row->date1);

			 $detailrecords['toperiod2']       	        = strip_tags($row->toperiod2);
			 $detailrecords['date2']       	        = strip_tags($row->date2);

			 $detailrecords['toperiod3']       	        = strip_tags($row->toperiod3);
			 $detailrecords['date3']       	        = strip_tags($row->date3);

			 $detailrecords['toperiod4']       	        = strip_tags($row->toperiod4);
			 $detailrecords['date4']       	        = strip_tags($row->date4);

			 $detailrecords['toperiod5']       	        = strip_tags($row->toperiod5);
			 $detailrecords['date5']       	        = strip_tags($row->date5);

			 $detailrecords['title1']          =  strip_tags($row->title1);
			 $detailrecords['certificate1']          =  strip_tags($row->certificate1);

             $detailrecords['title2']          =  strip_tags($row->title2);
			 $detailrecords['certificate2']          =  strip_tags($row->certificate2);

			 $detailrecords['title3']          =  strip_tags($row->title3);
			 $detailrecords['certificate3']          =  strip_tags($row->certificate3);

			 $detailrecords['title4']          =  strip_tags($row->title4);
			 $detailrecords['certificate4']          =  strip_tags($row->certificate4);

			 $detailrecords['title5']          =  strip_tags($row->title5);
			 $detailrecords['certificate5']          =  strip_tags($row->certificate5);

			 $detailrecords['status'] =  strip_tags($row->status);
				
	 
		 }
		 return $detailrecords;
	 }


	 /*End Get employee master*/


	 /*Update employee Master*/

	 public function updateemployeemaster($mysqli,$id) { 		
	
		$date  = date('Y-m-d');
		if (isset($_POST['employeecode'])) {
		 $employeecode             = mysqli_real_escape_string($mysqli,$_POST['employeecode']);		
	   }
		if (isset($_POST['employeename'])) {
		$employeename             = mysqli_real_escape_string($mysqli,$_POST['employeename']);		
		}	
		if (isset($_POST['dateofbirth'])) {
		$dateofbirth               = mysqli_real_escape_string($mysqli,$_POST['dateofbirth']);		
		}
		if (isset($_POST['gender'])) {
		$gender               = mysqli_real_escape_string($mysqli,$_POST['gender']);		
		}
	   
		if (isset($_POST['email'])) {
		$email               = mysqli_real_escape_string($mysqli,$_POST['email']);		
		}
	
		if (isset($_POST['designation'])) {
		$designation               = mysqli_real_escape_string($mysqli,$_POST['designation']);		
		}
		if (isset($_POST['mobilenumber'])) {
		$mobilenumber               = mysqli_real_escape_string($mysqli,$_POST['mobilenumber']);		
		}
		if (isset($_POST['dateofjoining'])) {
			$dateofjoining               = mysqli_real_escape_string($mysqli,$_POST['dateofjoining']);		
		}
		if (isset($_POST['contact'])) {
			$contact               = mysqli_real_escape_string($mysqli,$_POST['contact']);		
		}

		if (isset($_POST['expertise'])) {
			$expertise               = mysqli_real_escape_string($mysqli,$_POST['expertise']);		
		}
		if (isset($_POST['starrating'])) {
			$starrating               = mysqli_real_escape_string($mysqli,$_POST['starrating']);		
		}
		if (isset($_POST['basic'])) {
			$basic               = mysqli_real_escape_string($mysqli,$_POST['basic']);		
		}
		if (isset($_POST['hra'])) {
			$hra               = mysqli_real_escape_string($mysqli,$_POST['hra']);		
		}
		if (isset($_POST['conveyance'])) {
			$conveyance               = mysqli_real_escape_string($mysqli,$_POST['conveyance']);		
		}
		if (isset($_POST['allowance'])) {
			$allowance               = mysqli_real_escape_string($mysqli,$_POST['allowance']);		
		}
		if (isset($_POST['incentivepercent'])) {
			$incentivepercent               = mysqli_real_escape_string($mysqli,$_POST['incentivepercent']);		
		}
		if (isset($_POST['grosspay'])) {
			$grosspay               = mysqli_real_escape_string($mysqli,$_POST['grosspay']);		
		}
		if (isset($_POST['tds'])) {
			$tds               = mysqli_real_escape_string($mysqli,$_POST['tds']);		
		}
		if (isset($_POST['pf'])) {
			$pf               = mysqli_real_escape_string($mysqli,$_POST['pf']);		
		}
		if (isset($_POST['salaryadvance'])) {
			$salaryadvance               = mysqli_real_escape_string($mysqli,$_POST['salaryadvance']);		
		}
		if (isset($_POST['totaldeduction'])) {
			$totaldeduction               = mysqli_real_escape_string($mysqli,$_POST['totaldeduction']);		
		}
		if (isset($_POST['anyotherdeduction'])) {
			$anyotherdeduction               = mysqli_real_escape_string($mysqli,$_POST['anyotherdeduction']);		
		}
		if (isset($_POST['loans'])) {
			$loans               = mysqli_real_escape_string($mysqli,$_POST['loans']);		
		}
		if (isset($_POST['esi'])) {
			$esi               = mysqli_real_escape_string($mysqli,$_POST['esi']);		
		}
		
		if (isset($_POST['institutetype1'])) {
			$institutetype1               = mysqli_real_escape_string($mysqli,$_POST['institutetype1']);		
		}
		if (isset($_POST['name1'])) {
			$name1               = mysqli_real_escape_string($mysqli,$_POST['name1']);		
		}
		if (isset($_POST['positionheld1'])) {
			$positionheld1               = mysqli_real_escape_string($mysqli,$_POST['positionheld1']);		
		}
		if (isset($_POST['place1'])) {
			$place1               = mysqli_real_escape_string($mysqli,$_POST['place1']);		
		}
		if (isset($_POST['fromperiod1'])) {
			$fromperiod1               = mysqli_real_escape_string($mysqli,$_POST['fromperiod1']);		
		}
		if (isset($_POST['toperiod1'])) {
			$toperiod1               = mysqli_real_escape_string($mysqli,$_POST['toperiod1']);		
		}
		if (isset($_POST['date1'])) {
			$date1               = mysqli_real_escape_string($mysqli,$_POST['date1']);		
		}



		if (isset($_POST['institutetype2'])) {
			$institutetype2               = mysqli_real_escape_string($mysqli,$_POST['institutetype2']);		
		}
		if (isset($_POST['name2'])) {
			$name2               = mysqli_real_escape_string($mysqli,$_POST['name2']);		
		}
		if (isset($_POST['positionheld2'])) {
			$positionheld2               = mysqli_real_escape_string($mysqli,$_POST['positionheld2']);		
		}
		if (isset($_POST['place2'])) {
			$place2               = mysqli_real_escape_string($mysqli,$_POST['place2']);		
		}
		if (isset($_POST['fromperiod2'])) {
			$fromperiod2               = mysqli_real_escape_string($mysqli,$_POST['fromperiod2']);		
		}
		if (isset($_POST['toperiod2'])) {
			$toperiod2               = mysqli_real_escape_string($mysqli,$_POST['toperiod2']);		
		}
		if (isset($_POST['date2'])) {
			$date2               = mysqli_real_escape_string($mysqli,$_POST['date2']);		
		}

		if (isset($_POST['institutetype3'])) {
			$institutetype3               = mysqli_real_escape_string($mysqli,$_POST['institutetype3']);		
		}
		if (isset($_POST['name3'])) {
			$name3               = mysqli_real_escape_string($mysqli,$_POST['name3']);		
		}
		if (isset($_POST['positionheld3'])) {
			$positionheld3               = mysqli_real_escape_string($mysqli,$_POST['positionheld3']);		
		}
		if (isset($_POST['place3'])) {
			$place3               = mysqli_real_escape_string($mysqli,$_POST['place3']);		
		}
		if (isset($_POST['fromperiod3'])) {
			$fromperiod3               = mysqli_real_escape_string($mysqli,$_POST['fromperiod3']);		
		}
		if (isset($_POST['toperiod1'])) {
			$toperiod3               = mysqli_real_escape_string($mysqli,$_POST['toperiod3']);		
		}
		if (isset($_POST['date3'])) {
			$date3               = mysqli_real_escape_string($mysqli,$_POST['date3']);		
		}

		if (isset($_POST['institutetype4'])) {
			$institutetype4               = mysqli_real_escape_string($mysqli,$_POST['institutetype4']);		
		}
		if (isset($_POST['name4'])) {
			$name4               = mysqli_real_escape_string($mysqli,$_POST['name4']);		
		}
		if (isset($_POST['positionheld4'])) {
			$positionheld4               = mysqli_real_escape_string($mysqli,$_POST['positionheld4']);		
		}
		if (isset($_POST['place4'])) {
			$place4               = mysqli_real_escape_string($mysqli,$_POST['place4']);		
		}
		if (isset($_POST['fromperiod4'])) {
			$fromperiod4               = mysqli_real_escape_string($mysqli,$_POST['fromperiod4']);		
		}
		if (isset($_POST['toperiod4'])) {
			$toperiod4               = mysqli_real_escape_string($mysqli,$_POST['toperiod4']);		
		}
		if (isset($_POST['date4'])) {
			$date4               = mysqli_real_escape_string($mysqli,$_POST['date4']);		
		}
		
		if (isset($_POST['institutetype5'])) {
			$institutetype5               = mysqli_real_escape_string($mysqli,$_POST['institutetype5']);		
		}
		if (isset($_POST['name5'])) {
			$name5               = mysqli_real_escape_string($mysqli,$_POST['name5']);		
		}
		if (isset($_POST['positionheld5'])) {
			$positionheld5               = mysqli_real_escape_string($mysqli,$_POST['positionheld5']);		
		}
		if (isset($_POST['place5'])) {
			$place5               = mysqli_real_escape_string($mysqli,$_POST['place5']);		
		}
		if (isset($_POST['fromperiod5'])) {
			$fromperiod5               = mysqli_real_escape_string($mysqli,$_POST['fromperiod5']);		
		}
		if (isset($_POST['toperiod5'])) {
			$toperiod5               = mysqli_real_escape_string($mysqli,$_POST['toperiod5']);		
		}
		if (isset($_POST['date5'])) {
			$date5               = mysqli_real_escape_string($mysqli,$_POST['date5']);		
		}
		if(isset($_POST['status']) &&    $_POST['status'] == 'Yes')		
		{
			$status=0;
		}
		else
		{
			$status=1;
		}

	   $updateQry = 'UPDATE  employee  SET employeecode="'.strip_tags($employeecode).'" ,
	   employeename="'.strip_tags($employeename).'" ,dateofbirth="'.strip_tags($dateofbirth).'" ,		
	   gender="'.strip_tags($gender).'" ,	email="'.strip_tags($email).'" ,	
	   designation="'.strip_tags($designation).'" ,mobilenumber="'.strip_tags($mobilenumber).'" ,	
	   dateofjoining="'.strip_tags($dateofjoining).'" ,contact="'.strip_tags($contact).'" ,
	   expertise="'.strip_tags($expertise).'" ,
	   starrating="'.strip_tags($starrating).'" ,basic="'.strip_tags($basic).'" ,
	   hra="'.strip_tags($hra).'" ,conveyance="'.strip_tags($conveyance).'" ,	 
	   allowance="'.strip_tags($allowance).'" ,incentivepercent="'.strip_tags($incentivepercent).'" ,	
	   grosspay="'.strip_tags($grosspay).'" ,tds="'.strip_tags($tds).'" ,	
	   pf="'.strip_tags($pf).'" ,esi="'.strip_tags($esi).'" ,	
	   loans="'.strip_tags($loans).'" ,salaryadvance="'.strip_tags($salaryadvance).'" ,	
	   totaldeduction="'.strip_tags($totaldeduction).'" ,anyotherdeduction="'.strip_tags($anyotherdeduction).'" ,	
	   

	
	   institutetype1="'.strip_tags($institutetype1).'" ,name1="'.strip_tags($name1).'" ,	
	   positionheld1="'.strip_tags($positionheld1).'" ,place1="'.strip_tags($place1).'" ,	
	   fromperiod1="'.strip_tags($fromperiod1).'",toperiod1="'.strip_tags($toperiod1).'",
	   date1="'.strip_tags($date1).'",

	   institutetype2="'.strip_tags($institutetype2).'" ,name2="'.strip_tags($name2).'" ,	
	   positionheld2="'.strip_tags($positionheld2).'" ,place2="'.strip_tags($place2).'" ,	
	   fromperiod2="'.strip_tags($fromperiod2).'",toperiod2="'.strip_tags($toperiod2).'",
	   date2="'.strip_tags($date2).'",

	   institutetype3="'.strip_tags($institutetype3).'" ,name3="'.strip_tags($name3).'" ,	
	   positionheld3="'.strip_tags($positionheld3).'" ,place3="'.strip_tags($place3).'" ,	
	   fromperiod3="'.strip_tags($fromperiod3).'",toperiod3="'.strip_tags($toperiod3).'",
	   date3="'.strip_tags($date3).'",

	   institutetype4="'.strip_tags($institutetype4).'" ,name4="'.strip_tags($name4).'" ,	
	   positionheld4="'.strip_tags($positionheld4).'" ,place4="'.strip_tags($place4).'" ,	
	   fromperiod4="'.strip_tags($fromperiod4).'",toperiod4="'.strip_tags($toperiod4).'",
	   date4="'.strip_tags($date4).'",

	   institutetype5="'.strip_tags($institutetype5).'" ,name5="'.strip_tags($name5).'" ,	
	   positionheld5="'.strip_tags($positionheld5).'" ,place5="'.strip_tags($place5).'" ,	
	   fromperiod5="'.strip_tags($fromperiod5).'",toperiod5="'.strip_tags($toperiod5).'",
	   date5="'.strip_tags($date5).'",

	   status="'.$status.'" WHERE employeeid="'.mysqli_real_escape_string($mysqli,$id).'"';  
   
   $res =$mysqli->query($updateQry)or die("Error in in update Query!.".$mysqli->error); 
			
			 
   }
   // Add Vendor

   public function addvendor($mysqli){
   	if(isset($_POST['vendorcode'])){
   		$vendorcode = $_POST['vendorcode'];
   	}
   	if(isset($_POST['vendorname'])){
   		$vendorname = $_POST['vendorname'];
   	}
   	if(isset($_POST['address1'])){
   		$address1 = $_POST['address1'];
   	}
   	if(isset($_POST['address2'])){
   		$address2 = $_POST['address2'];
   	}
   	if(isset($_POST['district'])){
   		$district = $_POST['district'];
   	}
   	if(isset($_POST['pincode'])){
   		$pincode = $_POST['pincode'];
   	}
   	if(isset($_POST['state'])){
   		$state = $_POST['state'];
   	}
   	if(isset($_POST['country'])){
   		$country = $_POST['country'];
   	}
   	if(isset($_POST['contactperson'])){
   		$contactperson = $_POST['contactperson'];
   	}
   	if(isset($_POST['contact'])){
   		$contact = $_POST['contact'];
   	}
   	if(isset($_POST['mailid'])){
   		$mailid = $_POST['mailid'];
   	}
   	if(isset($_POST['gstnumber'])){
   		$gstnumber = $_POST['gstnumber'];
   	}
   	if(isset($_POST['stocktype'])){
   		$stocktype = $_POST['stocktype'];
   	}
   	if(isset($_POST['deliverytime'])){
   		$deliverytime = $_POST['deliverytime'];
   	}
   	if(isset($_POST['reorderlevel'])){
   		$reorderlevel = $_POST['reorderlevel'];
   	}
   	if(isset($_POST['minimumstock'])){
   		$minimumstock = $_POST['minimumstock'];
   	}
   	if(isset($_POST['maximumstock'])){
   		$maximumstock = $_POST['maximumstock'];
   	}
   	if(isset($_POST['isgst'])){
   		$isgst = $_POST['isgst'];
   	}
   	if(isset($_POST['gststate'])){
   		$gststate = $_POST['gststate'];
   	}
   	if(isset($_POST['statetype'])){
   		$statetype = $_POST['statetype'];
   	}
   	if(isset($_POST['gstnumber'])){
   		$gstnumber = $_POST['gstnumber'];
   	}

   	if(isset($_POST['bankname'])){
   		$bankname = $_POST['bankname'];
   	}
   if(isset($_POST['branchname'])){
   		$branchname = $_POST['branchname'];
   	}
   	if(isset($_POST['accountnumber'])){
   		$accountnumber = $_POST['accountnumber'];
   	}
   	if(isset($_POST['ifsccode'])){
   		$ifsccode = $_POST['ifsccode'];
   	}
   	if(isset($_POST['subgroup'])){
   		$subgroup = $_POST['subgroup'];
   	}
   	if(isset($_POST['groupname'])){
   		$groupname = $_POST['groupname'];
   	}
   	if(isset($_POST['ledgername'])){
   		$ledgername = $_POST['ledgername'];
   	}
   	if(isset($_POST['creditlimit'])){
   		$creditlimit = $_POST['creditlimit'];
   	}
   	if(isset($_POST['costcentre']) &&  $_POST['costcentre'] == 'Yes')		
		{
			$costcentre="Yes";
		}
		else
		{
			$costcentre="No";
		}
	
	if(isset($_POST['inventory']) &&    $_POST['inventory'] == 'Yes')
		{
			$inventory="Yes";
		}
		else
		{
			$inventory="No";
		}
	

	$insertvendor="INSERT INTO vendor(vendorcode, vendorname, address1, address2, district, pincode, state, country, contactperson, contact, mailid, stocktype, deliverytime, reorderlevel, minimumstock, maximumstock, isgst, gststate, statetype, gstnumber, bankname, branchname, accountnumber, ifsccode, subgroup, groupname, ledgername, creditlimit, costcentre,inventory) VALUES('".strip_tags($vendorcode)."', '".strip_tags($vendorname)."', '".strip_tags($address1)."', '".strip_tags($address2)."', '".strip_tags($district)."', '".strip_tags($pincode)."', '".strip_tags($state)."','".strip_tags($country)."','".strip_tags($contactperson)."', '".strip_tags($contact)."', '".strip_tags($mailid)."',  '".strip_tags($stocktype)."', '".strip_tags($deliverytime)."', '".strip_tags($reorderlevel)."', '".strip_tags($minimumstock)."', '".strip_tags($maximumstock)."', '".strip_tags($isgst)."', '".strip_tags($gststate)."', '".strip_tags($statetype)."', '".strip_tags($gstnumber)."', '".strip_tags($bankname)."', '".strip_tags($branchname)."', '".strip_tags($accountnumber)."', '".strip_tags($ifsccode)."', '".strip_tags($subgroup)."', '".strip_tags($groupname)."', '".strip_tags($ledgername)."', '".strip_tags($creditlimit)."', '".strip_tags($costcentre)."', '".strip_tags($inventory)."')";
		$insresult=$mysqli->query($insertvendor);
}

   public function deletevendor($mysqli, $id){
   	$date  = date('Y-m-d'); 
   	$deletestock = "UPDATE vendor set status='1' WHERE vendorid='".strip_tags($id)."' ";
   	$deletestockres=$mysqli->query($deletestock) or die("Error in delete query".$mysqli->error);
   }

   public function getvendor($mysqli, $id){
   	$vendorselect = "SELECT * FROM vendor WHERE vendorid='".mysqli_real_escape_string($mysqli,$id)."'"; 
	$res =$mysqli->query($vendorselect) or die("Error in Get All Records".$mysqli->error);
	$detailrecords = array();
	if ($mysqli->affected_rows>0)
	{
		$row = $res->fetch_object();	
        $detailrecords['vendorid']      = $row->vendorid; 
		$detailrecords['vendorcode']    = $row->vendorcode;
		$detailrecords['vendorname']    = $row->vendorname; 
		$detailrecords['address1']      = $row->address1; 
		$detailrecords['address2']      = $row->address2;
		$detailrecords['district']      = $row->district;  	
		$detailrecords['pincode']       = $row->pincode;
		$detailrecords['state']         = $row->state;
		$detailrecords['country']       = $row->country;
		$detailrecords['contactperson'] = $row->contactperson; 
		$detailrecords['contact']       = $row->contact; 
		$detailrecords['mailid']        = $row->mailid; 

		$detailrecords['stocktype']     = $row->stocktype;  
		$detailrecords['deliverytime']  = $row->deliverytime; 
		$detailrecords['reorderlevel']  = $row->reorderlevel; 
		$detailrecords['minimumstock']  = $row->minimumstock;
		$detailrecords['maximumstock']  = $row->maximumstock;

		$detailrecords['isgst']         = $row->isgst; 
		$detailrecords['gststate']      = $row->gststate; 
		$detailrecords['statetype']     = $row->statetype;
		$detailrecords['gstnumber']     = $row->gstnumber;

		$detailrecords['bankname']      = $row->bankname; 
		$detailrecords['branchname']    = $row->branchname; 
		$detailrecords['accountnumber'] = $row->accountnumber;
		$detailrecords['ifsccode']      = $row->ifsccode;

		$detailrecords['subgroup']      = $row->subgroup; 
		$detailrecords['groupname']     = $row->groupname; 
		$detailrecords['ledgername']    = $row->ledgername;
		$detailrecords['creditlimit']   = $row->creditlimit;
		$detailrecords['costcentre']    = $row->costcentre;
		$detailrecords['inventory']     = $row->inventory;
	}
	return $detailrecords;
   }

   public function updatevendor($mysqli, $id){

   	if(isset($_POST['vendorcodeupdate'])){
   		$vendorcodeupdate = $_POST['vendorcodeupdate'];
   	}
   	if(isset($_POST['vendorname'])){
   		$vendorname = $_POST['vendorname'];
   	}
   	if(isset($_POST['address1'])){
   		$address1 = $_POST['address1'];
   	}
   	if(isset($_POST['address2'])){
   		$address2 = $_POST['address2'];
   	}
   	if(isset($_POST['district'])){
   		$district = $_POST['district'];
   	}
   	if(isset($_POST['pincode'])){
   		$pincode = $_POST['pincode'];
   	}
   	if(isset($_POST['state'])){
   		$state = $_POST['state'];
   	}
   	if(isset($_POST['country'])){
   		$country = $_POST['country'];
   	}
   	if(isset($_POST['contactperson'])){
   		$contactperson = $_POST['contactperson'];
   	}
   	if(isset($_POST['contact'])){
   		$contact = $_POST['contact'];
   	}
   	if(isset($_POST['mailid'])){
   		$mailid = $_POST['mailid'];
   	}
   
   	if(isset($_POST['stocktype'])){
   		$stocktype = $_POST['stocktype'];
   	}
   	if(isset($_POST['deliverytime'])){
   		$deliverytime = $_POST['deliverytime'];
   	}
   	if(isset($_POST['reorderlevel'])){
   		$reorderlevel = $_POST['reorderlevel'];
   	}
   	if(isset($_POST['minimumstock'])){
   		$minimumstock = $_POST['minimumstock'];
   	}
   	if(isset($_POST['maximumstock'])){
   		$maximumstock = $_POST['maximumstock'];
   	}
   	if(isset($_POST['isgst'])){
   		$isgst = $_POST['isgst'];
   	}
   	if(isset($_POST['upgststate'])){
   		$upgststate = $_POST['upgststate'];
   	}
   	if(isset($_POST['upstatetype'])){
   		$upstatetype = $_POST['upstatetype'];
   	}
   	if(isset($_POST['upgstnumber'])){
   		$upgstnumber = $_POST['upgstnumber'];
   	}

   	if(isset($_POST['bankname'])){
   		$bankname = $_POST['bankname'];
   	}
   if(isset($_POST['branchname'])){
   		$branchname = $_POST['branchname'];
   	}
   	if(isset($_POST['accountnumber'])){
   		$accountnumber = $_POST['accountnumber'];
   	}
   	if(isset($_POST['ifsccode'])){
   		$ifsccode = $_POST['ifsccode'];
   	}
   	if(isset($_POST['subgroup'])){
   		$subgroup = $_POST['subgroup'];
   	}
   	if(isset($_POST['groupname'])){
   		$groupname = $_POST['groupname'];
   	}
   	if(isset($_POST['ledgername'])){
   		$ledgername = $_POST['ledgername'];
   	}
   	if(isset($_POST['creditlimit'])){
   		$creditlimit = $_POST['creditlimit'];
   	}
   	if(isset($_POST['costcentre']) &&  $_POST['costcentre'] == 'Yes')		
		{
			$costcentre="Yes";
		}
		else
		{
			$costcentre="No";
		}
	
	if(isset($_POST['inventory']) &&    $_POST['inventory'] == 'Yes')
		{
			$inventory="Yes";
		}
		else
		{
			$inventory="No";
		}
		$updatestock="UPDATE vendor SET vendorcode='".strip_tags($vendorcodeupdate)."', vendorname='".strip_tags($vendorname)."', address1='".strip_tags($address1)."', address2='".strip_tags($address2)."', district='".strip_tags($district)."', pincode='".strip_tags($pincode)."', state='".strip_tags($state)."', country='".strip_tags($country)."', contactperson='".strip_tags($contactperson)."', contact='".strip_tags($contact)."', mailid='".strip_tags($mailid)."', stocktype='".strip_tags($stocktype)."', deliverytime='".strip_tags($deliverytime)."', reorderlevel='".strip_tags($reorderlevel)."', minimumstock='".strip_tags($minimumstock)."', maximumstock='".strip_tags($maximumstock)."',  isgst='".strip_tags($isgst)."', gststate='".strip_tags($upgststate)."', statetype='".strip_tags($upstatetype)."', gstnumber='".strip_tags($upgstnumber)."',  bankname='".strip_tags($bankname)."', branchname='".strip_tags($branchname)."', accountnumber='".strip_tags($accountnumber)."', ifsccode='".strip_tags($ifsccode)."',  subgroup='".strip_tags($subgroup)."',  groupname='".strip_tags($groupname)."',  ledgername='".strip_tags($ledgername)."', creditlimit='".strip_tags($creditlimit)."',  costcentre='".strip_tags($costcentre)."', inventory='".strip_tags($inventory)."' WHERE vendorid= '".strip_tags($id)."' ";
		$updresult=$mysqli->query($updatestock)or die("Error in in update Query!.".$mysqli->error);
   }


 /* Customer Details Add */ 

 public function addcustomer($mysqli)  
 {
	 $date  = date('Y-m-d');
 
	 if (isset($_POST['customercode'])) {
		 $customercode             = mysqli_real_escape_string($mysqli,$customercode);
	 }
	 if (isset($_POST['typeofcustomer'])) {
	  $typeofcustomer             = mysqli_real_escape_string($mysqli,$_POST['typeofcustomer']);
	 }
	 if (isset($_POST['customername'])) {
	 $customername             = mysqli_real_escape_string($mysqli,$_POST['customername']);		
	 }	
	 if (isset($_POST['address1'])) {
	 $address1               = mysqli_real_escape_string($mysqli,$_POST['address1']);		
	 }
	 if (isset($_POST['address2'])) {
	 $address2               = mysqli_real_escape_string($mysqli,$_POST['address2']);		
	 }
	 if (isset($_POST['district'])) {
	 $district               = mysqli_real_escape_string($mysqli,$_POST['district']);		
	 }
	 if (isset($_POST['pincode'])) {
	  $pincode             = mysqli_real_escape_string($mysqli,$_POST['pincode']);
	 }
	 if (isset($_POST['state'])) {
	  $state             = mysqli_real_escape_string($mysqli,$_POST['state']);
	 }
	 if (isset($_POST['country'])) {
	  $country             = mysqli_real_escape_string($mysqli,$_POST['country']);
	 }
	 if (isset($_POST['contactperson'])) {
	 $contactperson               = mysqli_real_escape_string($mysqli,$_POST['contactperson']);		
	 }
	 if (isset($_POST['mobilenumber'])) {
	 $mobilenumber             = mysqli_real_escape_string($mysqli,$_POST['mobilenumber']);		
	 }	
	 if (isset($_POST['whatsappnumber'])) {
	 $whatsappnumber               = mysqli_real_escape_string($mysqli,$_POST['whatsappnumber']);		
	 }
	 if (isset($_POST['emailid'])) {
	 $emailid               = mysqli_real_escape_string($mysqli,$_POST['emailid']);		
	 }
	 if (isset($_POST['needmembership'])) {
	  $needmembership             = mysqli_real_escape_string($mysqli,$_POST['needmembership']);
	 }
	 if (isset($_POST['isbranch'])) {
	  $isbranch             = mysqli_real_escape_string($mysqli,$_POST['isbranch']);
	 }
	 if (isset($_POST['gstnumber'])) {
	 $gstnumber               = mysqli_real_escape_string($mysqli,$_POST['gstnumber']);		
	 }
	 if (isset($_POST['membershipno'])) {
	 $membershipno               = mysqli_real_escape_string($mysqli,$_POST['membershipno']);		
	 }
	 if (isset($_POST['membershipvalue'])) {
	 $membershipvalue               = mysqli_real_escape_string($mysqli,$_POST['membershipvalue']);
	 }
	 if (isset($_POST['issuedate'])) {
	 $issuedate               = mysqli_real_escape_string($mysqli,$_POST['issuedate']);		
	 } 
	 if (isset($_POST['expirydate'])) {
	 $expirydate               = mysqli_real_escape_string($mysqli,$_POST['expirydate']);		
	 }
	 if (isset($_POST['mobile1'])) {
	 $mobile1               = mysqli_real_escape_string($mysqli,$_POST['mobile1']);		
	 }
	 if (isset($_POST['person1'])) {
	 $person1               = mysqli_real_escape_string($mysqli,$_POST['person1']);		
	 }
	 if (isset($_POST['mobile2'])) {
	 $mobile2               = mysqli_real_escape_string($mysqli,$_POST['mobile2']);		
	 }
	 if (isset($_POST['person2'])) {
	 $person2               = mysqli_real_escape_string($mysqli,$_POST['person2']);		
	 }
	 if (isset($_POST['mobile3'])) {
	 $mobile3               = mysqli_real_escape_string($mysqli,$_POST['mobile3']);		
	 }
	 if (isset($_POST['person3'])) {
	 $person3               = mysqli_real_escape_string($mysqli,$_POST['person3']);		
	 }
	 if (isset($_POST['subgroup'])) {
		 $subgroup             = mysqli_real_escape_string($mysqli,$_POST['subgroup']);
	 } 
	 if (isset($_POST['groupname'])) {
		 $groupname             = mysqli_real_escape_string($mysqli,$_POST['groupname']);
	 } 
    if (isset($_POST['ledgername'])) {
		 $ledgername             = mysqli_real_escape_string($mysqli,$_POST['ledgername']);
	}	 
	 if(isset($_POST['costcentre']) &&    $_POST['costcentre'] == 'Yes')		
	 {
		 $costcentre="Yes";
	 }
	 else
	 {
	 	$costcentre="No";
	 }
	 
	 if(isset($_POST['inventory']) &&    $_POST['inventory'] == 'Yes')		
	 {
		 $inventory="Yes";
	 }
	 else
	 {
		 $inventory="No";
	 }

 
	 $qry = "INSERT INTO customer(customercode, typeofcustomer, customername, address1, address2, district, pincode, state, country, contactperson, mobilenumber, whatsappnumber, emailid, gstnumber, isbranch, needmembership, membershipno, membershipvalue, issuedate, expirydate, person1, mobile1, person2, mobile2, person3, mobile3, subgroup, groupname, ledgername, costcentre, inventory) 
	 VALUES (
	 '".strip_tags($customercode)."',
	 '".strip_tags($typeofcustomer)."',
	 '".strip_tags($customername)."',
	 '".strip_tags($address1)."',
	 '".strip_tags($address2)."',
	 '".strip_tags($district)."',
	 '".strip_tags($pincode)."',
	 '".strip_tags($state)."',
	 '".strip_tags($country)."',
	 '".strip_tags($contactperson)."',
	 '".strip_tags($mobilenumber)."',
	 '".strip_tags($whatsappnumber)."',
	 '".strip_tags($emailid)."',
	 '".strip_tags($gstnumber)."',
	 '".strip_tags($isbranch)."',
	 '".strip_tags($needmembership)."',
	 '".strip_tags($membershipno)."',
	 '".strip_tags($membershipvalue)."',
	 '".strip_tags($issuedate)."',
	 '".strip_tags($expirydate)."',
	 '".strip_tags($mobile1)."',
	 '".strip_tags($person1)."',  
	 '".strip_tags($mobile2)."',
	 '".strip_tags($person2)."',
	 '".strip_tags($mobile3)."', 
	 '".strip_tags($person3)."', 
	 '".strip_tags($subgroup)."',
	 '".strip_tags($groupname)."',
	 '".strip_tags($ledgername)."', 
	 '".strip_tags($costcentre)."',
	 '".strip_tags($inventory)."');";		
 
	 $res =$mysqli->query($qry)or die("Error in Query".$mysqli->error);
	 $id = 0;
	 $id = $mysqli->insert_id;
 
	 return $id; 
 }
 
 public function deletecustomer($mysqli,$id) 
 {
	 $date  = date('Y-m-d'); 
	 $qry = 'UPDATE  customer  SET status="1"  WHERE customid="'.mysqli_real_escape_string($mysqli,$id).'"'; 
	 $res =$mysqli->query($qry)or die("Error in delete query".$mysqli->error);	
 }
 
 public function updatecustomer($mysqli,$id){
 
	 $date  = date('Y-m-d');
	 $customercode             = mysqli_real_escape_string($mysqli,$customercode);
 
	 // if (isset($_POST['customercode'])) {
	 // 	$customercode            = mysqli_real_escape_string($mysqli,$_POST['customercode']);
	 //    }
	 if (isset($_POST['customername'])) {
	  $customername             = mysqli_real_escape_string($mysqli,$_POST['customername']);
	 }
	 if (isset($_POST['gender'])) {
	 $gender             = mysqli_real_escape_string($mysqli,$_POST['gender']);		
	 }	
	 if (isset($_POST['dateofbirth'])) {
	 $dateofbirth               = mysqli_real_escape_string($mysqli,$_POST['dateofbirth']);		
	 }
	 if (isset($_POST['customerimage'])) {
	 $customerimage               = mysqli_real_escape_string($mysqli,$_POST['customerimage']);		
	 }
	 if (isset($_POST['age'])) {
	  $age             = mysqli_real_escape_string($mysqli,$_POST['age']);
	 }
	 if (isset($_POST['mobilenumber'])) {
	 $mobilenumber             = mysqli_real_escape_string($mysqli,$_POST['mobilenumber']);		
	 }	
	 if (isset($_POST['whatsappnumber'])) {
	 $whatsappnumber               = mysqli_real_escape_string($mysqli,$_POST['whatsappnumber']);		
	 }
	 if (isset($_POST['anniverserydate'])) {
	 $anniverserydate               = mysqli_real_escape_string($mysqli,$_POST['anniverserydate']);		
	 }
	 if (isset($_POST['emailid'])) {
	 $emailid               = mysqli_real_escape_string($mysqli,$_POST['emailid']);		
	 }
	 if (isset($_POST['needmembership'])) {
	  $needmembership             = mysqli_real_escape_string($mysqli,$_POST['needmembership']);
	 }
 
 
 
	 
	 if (isset($_POST['gstno'])) {
		 $gstno               = mysqli_real_escape_string($mysqli,$_POST['gstno']);		
		 }
		 if (isset($_POST['contactpersion'])) {
		  $contactpersion             = mysqli_real_escape_string($mysqli,$_POST['contactpersion']);
		 }
		 if (isset($_POST['address1'])) {
		 $address1             = mysqli_real_escape_string($mysqli,$_POST['address1']);		
		 }	
		 if (isset($_POST['address2'])) {
		 $address2               = mysqli_real_escape_string($mysqli,$_POST['address2']);		
		 }
		 if (isset($_POST['pincode'])) {
		 $pincode               = mysqli_real_escape_string($mysqli,$_POST['pincode']);		
		 }
		 if (isset($_POST['country'])) {
			 $country               = mysqli_real_escape_string($mysqli,$_POST['country']);		
			 }
		 if (isset($_POST['state'])) {
		 $state               = mysqli_real_escape_string($mysqli,$_POST['state']);		
		 }
		 if (isset($_POST['district'])) {
			 $district               = mysqli_real_escape_string($mysqli,$_POST['district']);		
			 }
 
 
	 if (isset($_POST['typeofcustomer'])) {
	 $typeofcustomer             = mysqli_real_escape_string($mysqli,$_POST['typeofcustomer']);		
	 }	
	 if (isset($_POST['noofvisit'])) {
	 $noofvisit               = mysqli_real_escape_string($mysqli,$_POST['noofvisit']);		
	 }
	 if (isset($_POST['frequencyofvisit'])) {
	 $frequencyofvisit               = mysqli_real_escape_string($mysqli,$_POST['frequencyofvisit']);
	 }
	 
 
 
	 if (isset($_POST['subgroup'])) {
		 $subgroup             = mysqli_real_escape_string($mysqli,$_POST['subgroup']);
		}
 
		if (isset($_POST['groups'])) {
		 $groups             = mysqli_real_escape_string($mysqli,$_POST['groups']);
		}
 
		if (isset($_POST['ledgername'])) {
		 $ledgername             = mysqli_real_escape_string($mysqli,$_POST['ledgername']);
		}
 
 
 
	 if(isset($_POST['status']) &&    $_POST['status'] == 'Yes')		
	 {
		 $status=0;
	 }
	 else
	 {
		 $status=1;
	 }
 
 
	 if(isset($_POST['costcenter']) &&    $_POST['costcenter'] == 'Yes')		
	 {
		 $costcenter=0;
	 }
	 else
	 {
		 $costcenter=1;
	 }
 
	 
	 if(isset($_POST['inventory']) &&    $_POST['inventory'] == 'Yes')		
	 {
		 $inventory=0;
	 }
	 else
	 {
		 $inventory=1;
	 }
 
	 
 
 
  $updateQry = 'UPDATE  customer  SET   
  customername="'.strip_tags($customername).'" ,
  gender="'.strip_tags($gender).'" ,
  dateofbirth="'.strip_tags($dateofbirth).'" ,  
  age="'.strip_tags($age).'" ,	
  mobilenumber="'.strip_tags($mobilenumber).'" ,
  whatsappnumber="'.strip_tags($whatsappnumber).'" ,	
  anniverserydate="'.strip_tags($anniverserydate).'", 
  emailid="'.strip_tags($emailid).'" ,
  needmembership="'.strip_tags($needmembership).'" ,
 
 
  gstno="'.strip_tags($gstno).'" ,	
  contactpersion="'.strip_tags($contactpersion).'" ,
  address1="'.strip_tags($address1).'" ,	
  address2="'.strip_tags($address2).'", 
  pincode="'.strip_tags($pincode).'" ,
  country="'.strip_tags($country).'" ,
  state="'.strip_tags($state).'" ,
  district="'.strip_tags($district).'" ,
 
  typeofcustomer="'.strip_tags($typeofcustomer).'", 
  noofvisit="'.strip_tags($noofvisit).'" ,
  frequencyofvisit="'.strip_tags($frequencyofvisit).'" ,
 
  subgroup="'.strip_tags($subgroup).'" ,
  groupsnew="'.strip_tags($groups).'" ,
  ledgername="'.strip_tags($ledgername).'" ,
 
  costcenter="'.strip_tags($costcenter).'" ,
  inventory="'.strip_tags($inventory).'" ,
 
  status="'.$status.'" WHERE customid="'.mysqli_real_escape_string($mysqli,$id).'"';  
 
 $res =$mysqli->query($updateQry)or die("Error in in update Query!.".$mysqli->error); 
 }
 
 public function getcustomer($mysqli,$idupd)
 {
	 $qry = "SELECT * FROM customer WHERE customid='".mysqli_real_escape_string($mysqli,$idupd)."'"; 
	 $res =$mysqli->query($qry)or die("Error in Get All Records".$mysqli->error);
	 $detailrecords = array();
	 if ($mysqli->affected_rows>0)
	 {
		 $row = $res->fetch_object();	
		 $detailrecords['customid']                    = $row->customid; 
		 $detailrecords['customercode']                    = strip_tags($row->customercode); 
		 $detailrecords['customername']       	       = strip_tags($row->customername);
		 $detailrecords['gender']       	       = strip_tags($row->gender);
		 $detailrecords['dateofbirth']                  = strip_tags($row->dateofbirth);		  	
		 $detailrecords['customerimage']             = strip_tags($row->customerimage);
		 $detailrecords['age']       	           = strip_tags($row->age);
		 $detailrecords['mobilenumber']       	           = strip_tags($row->mobilenumber);
		 $detailrecords['whatsappnumber']                   = strip_tags($row->whatsappnumber);		  	
		 $detailrecords['anniverserydate']                    = strip_tags($row->anniverserydate);	
		 $detailrecords['emailid']       	           = strip_tags($row->emailid);
		 $detailrecords['needmembership']       	       = strip_tags($row->needmembership);
 
		 $detailrecords['gstno']       	           = strip_tags($row->gstno);
		 $detailrecords['contactpersion']       	           = strip_tags($row->contactpersion);
		 $detailrecords['address1']                   = strip_tags($row->address1);		  	
		 $detailrecords['address2']                    = strip_tags($row->address2);	
		 $detailrecords['pincode']       	           = strip_tags($row->pincode);
		 $detailrecords['country']       	       = strip_tags($row->country);
		 $detailrecords['state']       	       = strip_tags($row->state);
		 $detailrecords['district']       	       = strip_tags($row->district);
 
		 $detailrecords['typeofcustomer']              = strip_tags($row->typeofcustomer);		  	
		 $detailrecords['noofvisit']             = strip_tags($row->noofvisit);	
		 $detailrecords['frequencyofvisit']       	       = strip_tags($row->frequencyofvisit);
 
		 $detailrecords['subgroup']              = strip_tags($row->subgroup);		  	
		 $detailrecords['groupsnew']             = strip_tags($row->groups);	
		 $detailrecords['ledgername']       	       = strip_tags($row->ledgername);
 
		 $detailrecords['costcenter']             = strip_tags($row->costcenter);	
		 $detailrecords['inventory']       	       = strip_tags($row->inventory);
 
		 $detailrecords['status']                    = strip_tags($row->status);		
 
 
		 
 
	 }
	 return $detailrecords;
 }
 
 
 

  /* tax master Details Add */ 

  public function addtaxmaster($mysqli)  
  {
	  $date  = date('Y-m-d');
  
	  if (isset($_POST['financialyear'])) {
	   $financialyear             = mysqli_real_escape_string($mysqli,$_POST['financialyear']);
	  }
	  if (isset($_POST['classification'])) {
	  $classification             = mysqli_real_escape_string($mysqli,$_POST['classification']);		
	  }	
	  if (isset($_POST['description'])) {
	  $description               = mysqli_real_escape_string($mysqli,$_POST['description']);		
	  }
	  if (isset($_POST['tax'])) {
		$tax               = mysqli_real_escape_string($mysqli,$_POST['tax']);		
		}
	  if (isset($_POST['cess'])) {
	  $cess               = mysqli_real_escape_string($mysqli,$_POST['cess']);		
	  }
	  if (isset($_POST['addl'])) {
	   $addl             = mysqli_real_escape_string($mysqli,$_POST['addl']);
	  }
	  if (isset($_POST['total'])) {
	  $total             = mysqli_real_escape_string($mysqli,$_POST['total']);		
	  }	
	  
	  if(isset($_POST['status']) &&    $_POST['status'] == 'Yes')		
	  {
		  $status=0;
	  }
	  else
	  {
		  $status=1;
	  }

	  $qry = "INSERT INTO taxmaster(
		  financialyear, classification,
	   description,tax,
	   cess, addl, total, status) 
	  VALUES (
	  '".strip_tags($financialyear)."',
	  '".strip_tags($classification)."',
	  '".strip_tags($description)."',
	  '".strip_tags($tax)."',
	  '".strip_tags($cess)."',
	  '".strip_tags($addl)."',
	  '".strip_tags($total)."',
	  '".strip_tags($status)."');";		
  
	  $res =$mysqli->query($qry)or die("Error in Query".$mysqli->error);
	  $id = 0;
	  $id = $mysqli->insert_id;
  
	  return $id; 
  }
  
  public function deletetaxmaster($mysqli,$id) 
  {
	  $date  = date('Y-m-d'); 
	  $qry = 'UPDATE  taxmaster  SET status="1"  WHERE taxid="'.mysqli_real_escape_string($mysqli,$id).'"'; 
	  $res =$mysqli->query($qry)or die("Error in delete query".$mysqli->error);	
  }
  
  public function updatetaxmaster($mysqli,$id){
  
	  $date  = date('Y-m-d');
  
	  if (isset($_POST['financialyear'])) {
	   $financialyear             = mysqli_real_escape_string($mysqli,$_POST['financialyear']);
	  }
	  if (isset($_POST['classification'])) {
	  $classification             = mysqli_real_escape_string($mysqli,$_POST['classification']);		
	  }	
	  if (isset($_POST['description'])) {
	  $description               = mysqli_real_escape_string($mysqli,$_POST['description']);		
	  }
	  if (isset($_POST['tax'])) {
		$tax               = mysqli_real_escape_string($mysqli,$_POST['tax']);		
		}
	  if (isset($_POST['cess'])) {
	  $cess               = mysqli_real_escape_string($mysqli,$_POST['cess']);		
	  }
	  if (isset($_POST['addl'])) {
	   $addl             = mysqli_real_escape_string($mysqli,$_POST['addl']);
	  }
	  if (isset($_POST['total'])) {
	  $total             = mysqli_real_escape_string($mysqli,$_POST['total']);		
	  }	
	 
	  if(isset($_POST['status']) && $_POST['status'] == 'Yes')		
	  {
		  $status=0;
	  }
	  else
	  {
		  $status=1;
	  }
  
  
   $updateQry = 'UPDATE  taxmaster  SET 
   financialyear="'.strip_tags($financialyear).'" ,
   classification="'.strip_tags($classification).'" ,
   description="'.strip_tags($description).'" ,
   tax="'.strip_tags($tax).'" ,
   cess="'.strip_tags($cess).'" ,	
   addl="'.strip_tags($addl).'" ,	
   total="'.strip_tags($total).'" ,
   status="'.$status.'" WHERE taxid="'.mysqli_real_escape_string($mysqli,$id).'"';  
  
  $res =$mysqli->query($updateQry)or die("Error in in update Query!.".$mysqli->error); 
  }
  
  public function gettaxmaster($mysqli,$idupd)
  {
	  $qry = "SELECT * FROM taxmaster WHERE taxid='".mysqli_real_escape_string($mysqli,$idupd)."'"; 
	  $res =$mysqli->query($qry)or die("Error in Get All Records".$mysqli->error);
	  $detailrecords = array();
	  if ($mysqli->affected_rows>0)
	  {
		  $row = $res->fetch_object();	
		  $detailrecords['taxid']                    = $row->taxid; 
		  $detailrecords['financialyear']       	       = strip_tags($row->financialyear);
		  $detailrecords['classification']       	       = strip_tags($row->classification);
		  $detailrecords['description']                  = strip_tags($row->description);	
		  $detailrecords['tax']                  = strip_tags($row->tax);		  	
		  $detailrecords['cess']             = strip_tags($row->cess);		
		  $detailrecords['addl']       	           = strip_tags($row->addl);
		  $detailrecords['total']       	           = strip_tags($row->total);
		  $detailrecords['status']                    = strip_tags($row->status);		
  
	  }
	  return $detailrecords;
  }


  /* Bank Details  */ 

  public function addbank($mysqli)  
  {
	 
	  $date  = date('Y-m-d');
  
	  if (isset($_POST['bankcode'])) {
	   $bankcode                  = mysqli_real_escape_string($mysqli,$_POST['bankcode']);
	  }
	  if (isset($_POST['bankname'])) {
	  $bankname                   = mysqli_real_escape_string($mysqli,$_POST['bankname']);		
	  }	
	  if (isset($_POST['accountno'])) {
	  $accountno                  = mysqli_real_escape_string($mysqli,$_POST['accountno']);		
	  }
	  if (isset($_POST['branchname'])) {
	  $branchname                 = mysqli_real_escape_string($mysqli,$_POST['branchname']);		
	  }
	  if (isset($_POST['shortform'])) {
	  $shortform                  = mysqli_real_escape_string($mysqli,$_POST['shortform']);		
	  }
	  if (isset($_POST['purpose'])) {
	  $purpose                    = mysqli_real_escape_string($mysqli,$_POST['purpose']);
	  }
	  if (isset($_POST['email'])) {
	  $email                      = mysqli_real_escape_string($mysqli,$_POST['email']);		
	  }	
	  if (isset($_POST['ifsccode'])) {
		$ifsccode                 = mysqli_real_escape_string($mysqli,$_POST['ifsccode']);		
	  }	
	  if (isset($_POST['contactperson'])) {
		$contactperson            = mysqli_real_escape_string($mysqli,$_POST['contactperson']);		
	  }	
	  if (isset($_POST['contactno'])) {
		$contactno                = mysqli_real_escape_string($mysqli,$_POST['contactno']);		
	  }	
	  if (isset($_POST['micrcode'])) {
		$micrcode                 = mysqli_real_escape_string($mysqli,$_POST['micrcode']);		
	  }	
	  if (isset($_POST['accounttype'])) {
		$accounttype              = mysqli_real_escape_string($mysqli,$_POST['accounttype']);		
	  }	
	  if (isset($_POST['subgrouptype'])) {
		$subgrouptype             = mysqli_real_escape_string($mysqli,$_POST['subgrouptype']);		
	  }	
	  if (isset($_POST['group'])) {
		$group                    = mysqli_real_escape_string($mysqli,$_POST['group']);		
	  }	
	  if (isset($_POST['ledgername'])) {
		$ledgername               = mysqli_real_escape_string($mysqli,$_POST['ledgername']);		
	  }		
	  if(isset($_POST['costcenter']) &&    $_POST['costcenter'] == 'Yes')		
	  {
		  $costcenter             = 0;
	  }
	  else
	  {
		  $costcenter             = 1;
	  }

	  $qry = "INSERT INTO bankmaster(
		  bankcode,bankname,accountno,branchname,shortform,purpose,mailid,
		  ifsccode,contactperson,contactno,micrcode,typeofaccount,undersubgroup,
		  fgroup,ledgername,costcenter) 
	  VALUES (
	  '".strip_tags($bankcode)."','".strip_tags($bankname)."','".strip_tags($accountno)."',
	  '".strip_tags($branchname)."','".strip_tags($shortform)."','".strip_tags($purpose)."',
	  '".strip_tags($email)."','".strip_tags($ifsccode)."','".strip_tags($contactperson)."',
	  '".strip_tags($contactno)."','".strip_tags($micrcode)."','".strip_tags($accounttype)."',
	  '".strip_tags($subgrouptype)."','".strip_tags($group)."','".strip_tags($ledgername)."',
	  '".strip_tags($costcenter)."');";		


	  $res =$mysqli->query($qry)or die("Error in Query".$mysqli->error);
	  $id = 0;
	  $id = $mysqli->insert_id;
  
	  return $id; 
  }
  
  public function deletebank($mysqli,$id) 
  {
	  $date  = date('Y-m-d'); 
	  $qry = 'UPDATE  bankmaster  SET status="1"  WHERE bankid="'.mysqli_real_escape_string($mysqli,$id).'"'; 
	  $res =$mysqli->query($qry)or die("Error in delete query".$mysqli->error);	
  }
  
  public function updatebank($mysqli,$id){
  
	$date  = date('Y-m-d');
  
	if (isset($_POST['bankcode'])) {
	 $bankcode                  = mysqli_real_escape_string($mysqli,$_POST['bankcode']);
	}
	if (isset($_POST['bankname'])) {
	$bankname                   = mysqli_real_escape_string($mysqli,$_POST['bankname']);		
	}	
	if (isset($_POST['accountno'])) {
	$accountno                  = mysqli_real_escape_string($mysqli,$_POST['accountno']);		
	}
	if (isset($_POST['branchname'])) {
	$branchname                 = mysqli_real_escape_string($mysqli,$_POST['branchname']);		
	}
	if (isset($_POST['shortform'])) {
	$shortform                  = mysqli_real_escape_string($mysqli,$_POST['shortform']);		
	}
	if (isset($_POST['purpose'])) {
	$purpose                    = mysqli_real_escape_string($mysqli,$_POST['purpose']);
	}
	if (isset($_POST['email'])) {
	$email                      = mysqli_real_escape_string($mysqli,$_POST['email']);		
	}	
	if (isset($_POST['ifsccode'])) {
	  $ifsccode                 = mysqli_real_escape_string($mysqli,$_POST['ifsccode']);		
	}	
	if (isset($_POST['contactperson'])) {
	  $contactperson            = mysqli_real_escape_string($mysqli,$_POST['contactperson']);		
	}	
	if (isset($_POST['contactno'])) {
	  $contactno                = mysqli_real_escape_string($mysqli,$_POST['contactno']);		
	}	
	if (isset($_POST['micrcode'])) {
	  $micrcode                 = mysqli_real_escape_string($mysqli,$_POST['micrcode']);		
	}	
	if (isset($_POST['accounttype'])) {
	  $accounttype              = mysqli_real_escape_string($mysqli,$_POST['accounttype']);		
	}	
	if (isset($_POST['subgrouptype'])) {
	  $subgrouptype             = mysqli_real_escape_string($mysqli,$_POST['subgrouptype']);		
	}	
	if (isset($_POST['group'])) {
	  $group                    = mysqli_real_escape_string($mysqli,$_POST['group']);		
	}	
	if (isset($_POST['ledgername'])) {
	  $ledgername               = mysqli_real_escape_string($mysqli,$_POST['ledgername']);		
	}		
	if(isset($_POST['costcenter']) &&    $_POST['costcenter'] == 'Yes')		
	{
		$costcenter             = 0;
	}
	else
	{
		$costcenter             = 1;
	}
	echo $_POST['costcenter'];
  //die;
   $updateQry = 'UPDATE  bankmaster  SET 
   bankcode="'.strip_tags($bankcode).'" ,bankname="'.strip_tags($bankname).'" ,
   accountno="'.strip_tags($accountno).'" ,branchname="'.strip_tags($branchname).'" ,
   shortform="'.strip_tags($shortform).'" , purpose="'.strip_tags($purpose).'" ,	
   mailid="'.strip_tags($email).'" ,ifsccode="'.strip_tags($ifsccode).'" ,
   contactperson="'.strip_tags($contactperson).'" ,contactno="'.strip_tags($contactno).'" ,
   micrcode="'.strip_tags($micrcode).'" ,typeofaccount="'.strip_tags($accounttype).'" ,
   undersubgroup="'.strip_tags($subgrouptype).'" ,fgroup="'.strip_tags($group).'" ,
   ledgername="'.strip_tags($ledgername).'" ,costcenter="'.$costcenter.'" 
   WHERE bankid ="'.mysqli_real_escape_string($mysqli,$id).'"';  
   
  $res =$mysqli->query($updateQry)or die("Error in in update Query!.".$mysqli->error); 
  }
  
  public function getbank($mysqli,$idupd)
  {
	  $qry = "SELECT * FROM bankmaster WHERE bankid ='".mysqli_real_escape_string($mysqli,$idupd)."'"; 
	  $res =$mysqli->query($qry)or die("Error in Get All Records".$mysqli->error);
	  $detailrecords = array();
	  if ($mysqli->affected_rows>0)
	  {
		  $row = $res->fetch_object();	
		  $detailrecords['bankid']                  = $row->bankid; 
		  $detailrecords['bankcode']                = strip_tags($row->bankcode);
		  $detailrecords['bankname']                = strip_tags($row->bankname);
		  $detailrecords['accountno']               = strip_tags($row->accountno);	
		  $detailrecords['branchname']              = strip_tags($row->branchname);		  	
		  $detailrecords['shortform']               = strip_tags($row->shortform);		
		  $detailrecords['purpose']       	        = strip_tags($row->purpose);
		  $detailrecords['mailid']       	        = strip_tags($row->mailid);
		  $detailrecords['ifsccode']       	        = strip_tags($row->ifsccode);
		  $detailrecords['contactperson']           = strip_tags($row->contactperson);
		  $detailrecords['contactno']       	    = strip_tags($row->contactno);
		  $detailrecords['micrcode']       	        = strip_tags($row->micrcode);
		  $detailrecords['typeofaccount']           = strip_tags($row->typeofaccount);
		  $detailrecords['undersubgroup']       	= strip_tags($row->undersubgroup);
		  $detailrecords['fgroup']       	        = strip_tags($row->fgroup);
		  $detailrecords['ledgername']       	    = strip_tags($row->ledgername);
		  $detailrecords['costcenter']       	    = strip_tags($row->costcenter);
		  $detailrecords['status']                  = strip_tags($row->status);		
  
	  }
	  return $detailrecords;
  }


public function getstock($mysqli){
	$stockselect="SELECT stock FROM stocks WHERE status=0";
	$stockresult=$mysqli->query($stockselect);
    $stocklist=array();
    if($stockresult->num_rows>0){
	while($stocks=$stockresult->fetch_assoc()){
		$stocklist[]=$stocks["stock"];
	}
}
return $stocklist;
}


public function getSubgroup($mysqli){
	$selectsubgrp="SELECT subgroupname FROM subgroup WHERE status=0";
	$subgroupresult=$mysqli->query($selectsubgrp);
    $subgrouplist=array();
    if($subgroupresult->num_rows>0){
	while($row=$subgroupresult->fetch_assoc()){
		$subgrouplist[]=$row["subgroupname"];
	}
	return $subgrouplist;
}
}





// billing Add

public function addbilling($mysqli) {
	$date  = date('Y-m-d');
    // if(isset($_POST['igsttotaligst'])){

		$companygst=$companyaddress=$companyphone=$companyemail=$billid="";

		if (isset($_POST['date'])) {
		 $date    = mysqli_real_escape_string($mysqli,$_POST['date']);
		}
		
		if (isset($_POST['companygst'])) {
		$companygst   = mysqli_real_escape_string($mysqli,$_POST['companygst']);		
		}	
		if (isset($_POST['companyaddress'])) {
		$companyaddress     = mysqli_real_escape_string($mysqli,$_POST['companyaddress']);		
		}
		if (isset($_POST['companyphone'])) {
		$companyphone  = mysqli_real_escape_string($mysqli,$_POST['companyphone']);		
		}
		if (isset($_POST['companyemail'])) {
		$companyemail  = mysqli_real_escape_string($mysqli,$_POST['companyemail']);		
		}
		if (isset($_POST['billid'])) {
		$billid     = mysqli_real_escape_string($mysqli,$_POST['billid']);
		}
	
	
		if (isset($_POST['customername'])) {
		$customername  = mysqli_real_escape_string($mysqli,$_POST['customername']);		
		}	
		if (isset($_POST['customergst'])) {
		  $customergst  = mysqli_real_escape_string($mysqli,$_POST['customergst']);		
		}	
		if (isset($_POST['customeraddress'])) {
		  $customeraddress    = mysqli_real_escape_string($mysqli,$_POST['customeraddress']);		
		}	
		if (isset($_POST['referalno'])) {
		  $referalno = mysqli_real_escape_string($mysqli,$_POST['referalno']);		
		}	
	
		
		if (isset($_POST['receivername'])) {
		  $receivername  = mysqli_real_escape_string($mysqli,$_POST['receivername']);		
		}	
		if (isset($_POST['receivergst'])) {
		  $receivergst = mysqli_real_escape_string($mysqli,$_POST['receivergst']);		
		}	
		if (isset($_POST['receiveraddress'])) {
		  $receiveraddress  = mysqli_real_escape_string($mysqli,$_POST['receiveraddress']);		
		}	
		if (isset($_POST['receivercontact'])) {
		  $receivercontact   = mysqli_real_escape_string($mysqli,$_POST['receivercontact']);		
		}	
	
	
	
		if (isset($_POST['transportername'])) {
		  $transportername    = mysqli_real_escape_string($mysqli,$_POST['transportername']);		
		}		
		if (isset($_POST['transportergst'])) {
			$transportergst  = mysqli_real_escape_string($mysqli,$_POST['transportergst']);		
		  }	
		  if (isset($_POST['transporteraddress'])) {
			$transporteraddress = mysqli_real_escape_string($mysqli,$_POST['transporteraddress']);		
		  }	
		  if (isset($_POST['transporteremail'])) {
			$transporteremail = mysqli_real_escape_string($mysqli,$_POST['transporteremail']);		
		  }	
		  if (isset($_POST['vehiclenumber'])) {
			$vehiclenumber  = mysqli_real_escape_string($mysqli,$_POST['vehiclenumber']);		
		  }	
	
	
		  if (isset($_POST['igsttotalamount'])) {
			$igsttotalamount  = mysqli_real_escape_string($mysqli,$_POST['igsttotalamount']);		
		  }		
		  if (isset($_POST['igsttotaldiscount'])) {
			$igsttotaldiscount  = mysqli_real_escape_string($mysqli,$_POST['igsttotaldiscount']);		
		  }	
		//   if (isset($_POST['totalcgst'])) {
		// 	$totalcgst = mysqli_real_escape_string($mysqli,$_POST['totalcgst']);		
		//   }	
		//   if (isset($_POST['totalsgst'])) {
		// 	$totalsgst = mysqli_real_escape_string($mysqli,$_POST['totalsgst']);		
		//   }	
		  if (isset($_POST['igsttotaligst'])) {
			$igsttotaligst = mysqli_real_escape_string($mysqli,$_POST['igsttotaligst']);		
		  }	
		
		  if (isset($_POST['igstotherchanges'])) {
			$igstotherchanges = mysqli_real_escape_string($mysqli,$_POST['igstotherchanges']);		
		  }	
		  if (isset($_POST['igsttotalinvoicevalue'])) {
			$igsttotalinvoicevalue = mysqli_real_escape_string($mysqli,$_POST['igsttotalinvoicevalue']);		
		  }		
		  if (isset($_POST['basis'])) {
			$basis  = mysqli_real_escape_string($mysqli,$_POST['basis']);		
		  }	
	
		  if(isset($_POST["products"])){
			$product=$_POST["products"];
			$products=implode(',', $product);
		}
		if(isset($_POST["igstqty"])){
			$igstqty=$_POST["igstqty"];
			$igstqty=implode(',', $igstqty);
		}
		if(isset($_POST["igstrate"])){
			$igstrate=$_POST["igstrate"];
			$igstrate=implode(',', $igstrate);
		}
		if(isset($_POST["igsttotal"])){
			$igsttotal=$_POST["igsttotal"];
			$igsttotal=implode(',', $igsttotal);
		}
		if(isset($_POST["igstdiscount"])){
			$igstdiscount=$_POST["igstdiscount"];
			$igstdiscount=implode(',', $igstdiscount);
		}
		if(isset($_POST["igsttaxablevalue"])){
			$igsttaxablevalue=$_POST["igsttaxablevalue"];
			$igsttaxablevalue=implode(',', $igsttaxablevalue);
		}
		if(isset($_POST["igstrateigst"])){
			$igstrateigst=$_POST["igstrateigst"];
			$igstrateigst=implode(',', $igstrateigst);
		}
		
		if(isset($_POST["igstalltotalamount"])){
			$igstalltotalamount=$_POST["igstalltotalamount"];
			$igstalltotalamount=implode(',', $igstalltotalamount);
		}
	
	
			 if(isset($_POST['basis']) &&    $_POST['basis'] == 'Yes')		
		{
			$basis   = "Yes";
		}
		else
		{
			$basis     = "No";
		}
		
	
	// 	foreach($html->find('table') as $table){ 
	// 		// returns all the <tr> tag inside $table
	// 		$all_trs = $table->find('tr');
	// 		$count = count($all_trs);
	// 		echo "<script>alert($count);</script>";
	//    }
	
	
		
	
		$companydetails = array("$companygst","$companyaddress","$companyphone","$companyemail");
		// $companydetail= json_encode($comapnydetails);
		$company=implode(",",$companydetails);
		
		$customerdetails = ["$customername","$customergst","$customeraddress","$referalno"];
		// $customerdetail = json_encode($customerdetails);
		$customer=implode(",",$customerdetails);
	
		$shippingdetails = ["$receivername","$receivergst","$receiveraddress","$receivercontact"];
		// $shippingdetail = json_encode($shippingdetails);
		$shipping=implode(",",$shippingdetails);
	
	
		$transportdetails = ["$transportername ","$transportergst","$transporteraddress","$transporteremail","$vehiclenumber"];
		// $transportdetail = json_encode($transportdetails);
		$transport=implode(",",$transportdetails);
	
	
	
		// $companydetails = $_POST['companydetails'];
	// foreach($companydetails as $companydetail){
	//   $companydetails = $companydetail; 
	// }
	
		$qry = "INSERT INTO billing(
			billid, date,companydetails, customerdetails, 
			 shippingdetails, transportdetails,products,qty,rate,total,
			 discount,taxablevalue,igst,alltotalamount,
			  totalamount, totaldiscount,
			   totaligst, otherchanges, totalinvoicevalue,basis) 
		 VALUES (
		 '$billid',
		 '$date',
		 '$company ',
		 '$customer',
		 '$shipping',
		 '$transport',
		 '$products',
		 '$igstqty',
		 '$igstrate',
		 '$igsttotal',
		 '$igstdiscount',
		 '$igsttaxablevalue',
		 '$igstrateigst',
		 '$igstalltotalamount',
		 '$igsttotalamount',
		 '$igsttotaldiscount',
		 '$igsttotaligst',
		 '$igstotherchanges', 
		 '$igsttotalinvoicevalue',
		 '$basis')";		
	
		$res =$mysqli->query($qry)or die("Error in Query".$mysqli->error);
		$id = 0;
		$id = $mysqli->insert_id;
	
		return $id; 
	
	

	}
	
	
	public function addcgst($mysqli){



  $companygst=$companyaddress=$companyphone=$companyemail=$billid="";

	if (isset($_POST['date'])) {
	 $date    = mysqli_real_escape_string($mysqli,$_POST['date']);
	}
	
	if (isset($_POST['companygst'])) {
	$companygst   = mysqli_real_escape_string($mysqli,$_POST['companygst']);		
	}	
	if (isset($_POST['companyaddress'])) {
	$companyaddress     = mysqli_real_escape_string($mysqli,$_POST['companyaddress']);		
	}
	if (isset($_POST['companyphone'])) {
	$companyphone  = mysqli_real_escape_string($mysqli,$_POST['companyphone']);		
	}
	if (isset($_POST['companyemail'])) {
	$companyemail  = mysqli_real_escape_string($mysqli,$_POST['companyemail']);		
	}
	if (isset($_POST['billid'])) {
	$billid     = mysqli_real_escape_string($mysqli,$_POST['billid']);
	}


	if (isset($_POST['customername'])) {
	$customername  = mysqli_real_escape_string($mysqli,$_POST['customername']);		
	}	
	if (isset($_POST['customergst'])) {
	  $customergst  = mysqli_real_escape_string($mysqli,$_POST['customergst']);		
	}	
	if (isset($_POST['customeraddress'])) {
	  $customeraddress    = mysqli_real_escape_string($mysqli,$_POST['customeraddress']);		
	}	
	if (isset($_POST['referalno'])) {
	  $referalno = mysqli_real_escape_string($mysqli,$_POST['referalno']);		
	}	

	
	if (isset($_POST['receivername'])) {
	  $receivername  = mysqli_real_escape_string($mysqli,$_POST['receivername']);		
	}	
	if (isset($_POST['receivergst'])) {
	  $receivergst = mysqli_real_escape_string($mysqli,$_POST['receivergst']);		
	}	
	if (isset($_POST['receiveraddress'])) {
	  $receiveraddress  = mysqli_real_escape_string($mysqli,$_POST['receiveraddress']);		
	}	
	if (isset($_POST['receivercontact'])) {
	  $receivercontact   = mysqli_real_escape_string($mysqli,$_POST['receivercontact']);		
	}	



	if (isset($_POST['transportername'])) {
	  $transportername    = mysqli_real_escape_string($mysqli,$_POST['transportername']);		
	}		
	if (isset($_POST['transportergst'])) {
		$transportergst  = mysqli_real_escape_string($mysqli,$_POST['transportergst']);		
	  }	
	  if (isset($_POST['transporteraddress'])) {
		$transporteraddress = mysqli_real_escape_string($mysqli,$_POST['transporteraddress']);		
	  }	
	  if (isset($_POST['transporteremail'])) {
		$transporteremail = mysqli_real_escape_string($mysqli,$_POST['transporteremail']);		
	  }	
	  if (isset($_POST['vehiclenumber'])) {
		$vehiclenumber  = mysqli_real_escape_string($mysqli,$_POST['vehiclenumber']);		
	  }	


	  if (isset($_POST['totalamount'])) {
		$totalamount  = mysqli_real_escape_string($mysqli,$_POST['totalamount']);		
	  }		
	  if (isset($_POST['totaldiscount'])) {
		$totaldiscount  = mysqli_real_escape_string($mysqli,$_POST['totaldiscount']);		
	  }	
	  if (isset($_POST['totalcgst'])) {
		$totalcgst = mysqli_real_escape_string($mysqli,$_POST['totalcgst']);		
	  }	
	  if (isset($_POST['totalsgst'])) {
		$totalsgst = mysqli_real_escape_string($mysqli,$_POST['totalsgst']);		
	  }	
	 	
	  if (isset($_POST['otherchanges'])) {
		$otherchanges = mysqli_real_escape_string($mysqli,$_POST['otherchanges']);		
	  }	
	  if (isset($_POST['totalinvoicevalue'])) {
		$totalinvoicevalue = mysqli_real_escape_string($mysqli,$_POST['totalinvoicevalue']);		
	  }		
	  if (isset($_POST['basis'])) {
		$basis  = mysqli_real_escape_string($mysqli,$_POST['basis']);		
	  }	

	  if(isset($_POST["products"])){
		$product=$_POST["products"];
		$products=implode(',', $product);
	}
	if(isset($_POST["qty"])){
		$qty=$_POST["qty"];
		$qty=implode(',', $qty);
	}
	if(isset($_POST["rate"])){
		$rate=$_POST["rate"];
		$rate=implode(',', $rate);
	}
	if(isset($_POST["total"])){
		$total=$_POST["total"];
		$total=implode(',', $total);
	}
	if(isset($_POST["discount"])){
		$discount=$_POST["discount"];
		$discount=implode(',', $discount);
	}
	if(isset($_POST["taxablevalue"])){
		$taxablevalue=$_POST["taxablevalue"];
		$taxablevalue=implode(',', $taxablevalue);
	}
	if(isset($_POST["cgstrate"])){
		$cgstrate=$_POST["cgstrate"];
		$cgstrate=implode(',', $cgstrate);
	}
	if(isset($_POST["sgstrate"])){
		$sgstrate=$_POST["sgstrate"];
		$sgstrate=implode(',', $sgstrate);
	}
	if(isset($_POST["alltotalamount"])){
		$alltotalamount=$_POST["alltotalamount"];
		$alltotalamount=implode(',', $alltotalamount);
	}


	 	if(isset($_POST['basis']) &&    $_POST['basis'] == 'Yes')		
	{
		$basis   = "Yes";
	}
	else
	{
		$basis     = "No";
	}
	

// 	foreach($html->find('table') as $table){ 
// 		// returns all the <tr> tag inside $table
// 		$all_trs = $table->find('tr');
// 		$count = count($all_trs);
// 		echo "<script>alert($count);</script>";
//    }


	

	$companydetails = array("$companygst","$companyaddress","$companyphone","$companyemail");
	// $companydetail= json_encode($comapnydetails);
	$company=implode(",",$companydetails);
	
	$customerdetails = ["$customername","$customergst","$customeraddress","$referalno"];
	// $customerdetail = json_encode($customerdetails);
	$customer=implode(",",$customerdetails);

	$shippingdetails = ["$receivername","$receivergst","$receiveraddress","$receivercontact"];
	// $shippingdetail = json_encode($shippingdetails);
	$shipping=implode(",",$shippingdetails);


	$transportdetails = ["$transportername ","$transportergst","$transporteraddress","$transporteremail","$vehiclenumber"];
	// $transportdetail = json_encode($transportdetails);
	$transport=implode(",",$transportdetails);



	// $companydetails = $_POST['companydetails'];
// foreach($companydetails as $companydetail){
//   $companydetails = $companydetail; 
// }

	$qry = "INSERT INTO billing(
		billid, date,companydetails, customerdetails, 
		 shippingdetails, transportdetails,products,qty,rate,total,
		 discount,taxablevalue,cgst,sgst,alltotalamount,
		  totalamount, totaldiscount,
		  totalcgst, totalsgst, otherchanges, totalinvoicevalue,basis) 
	 VALUES (
	 '$billid',
	 '$date',
	 '$company ',
	 '$customer',
	 '$shipping',
	 '$transport',
	 '$products',
	 '$qty',
	 '$rate',
	 '$total',
	 '$discount',
	 '$taxablevalue',
	 '$cgstrate',
	 '$sgstrate',
	 '$alltotalamount',
	 '$totalamount',
	 '$totaldiscount',
	 '$totalcgst',
	 '$totalsgst',
	 '$otherchanges', 
	 '$totalinvoicevalue',
	 '$basis')";		

	$res =$mysqli->query($qry)or die("Error in Query".$mysqli->error);
	$id = 0;
	$id = $mysqli->insert_id;

	return $id; 


}


public function addbillsetting($mysqli) {


	if (isset($_POST['users'])) {
		$users  = mysqli_real_escape_string($mysqli,$_POST['users']);		
		}

		if(isset($_POST['billing'])) {
			$billing  = mysqli_real_escape_string($mysqli,$_POST['billing']);		 

		}
     


		if(isset($_POST['status']) &&    $_POST['status'] == 'Yes')		
	{
		$status=0;
	}
	else
	{
		$status=1;
	}


      $qry = "INSERT INTO  billsetting (users,billtypes,status) VALUE (

		'".strip_tags($users)."',
		'".strip_tags($billing)."',
		'".strip_tags($status)."'
	  )";

	  $res =$mysqli->query($qry)or die("Error in Query".$mysqli->error);
	  $id = 0;
	  $id = $mysqli->insert_id;
  
	  return $id; 

}

public function deletebillsetting($mysqli, $id){
	$date  = date('Y-m-d'); 
	$deletestock = "UPDATE billsetting set status='1' WHERE id='".strip_tags($id)."' ";
	$deletestockres=$mysqli->query($deletestock) or die("Error in delete query".$mysqli->error);
}




public function updatebillsetting($mysqli,$id){
  
	$date  = date('Y-m-d');

	if (isset($_POST['users'])) {
		$users  = mysqli_real_escape_string($mysqli,$_POST['users']);		
		}

		if(isset($_POST['billing'])) {
			$billing  = mysqli_real_escape_string($mysqli,$_POST['billing']);		 

		}


		if(isset($_POST['status']) &&    $_POST['status'] == 'Yes')		
	{
		$status=0;
	}
	else
	{
		$status=1;
	}


 $updateQry = 'UPDATE  billsetting  SET 
 users="'.strip_tags($users).'" ,
 billtypes="'.strip_tags($billing).'" ,
 
 status="'.$status.'" WHERE id="'.mysqli_real_escape_string($mysqli,$id).'"';  

$res =$mysqli->query($updateQry)or die("Error in in update Query!.".$mysqli->error); 
}

public function getbillsetting($mysqli,$idupd)
{
	$qry = "SELECT * FROM billsetting WHERE id='".mysqli_real_escape_string($mysqli,$idupd)."'"; 
	$res =$mysqli->query($qry)or die("Error in Get All Records".$mysqli->error);
	$detailrecords = array();
	if ($mysqli->affected_rows>0)
	{
		$row = $res->fetch_object();	
		$detailrecords['id']               = $row->id; 
		$detailrecords['users']       	   = strip_tags($row->users);
		$detailrecords['billtypes']        = strip_tags($row->billtypes);
		$detailrecords['status']           = strip_tags($row->status);		

	}
	return $detailrecords;
}


public function getUsersetting($mysqli)
{
	$userselect="SELECT fullname FROM user WHERE status=0";
	$userresult=$mysqli->query($userselect);
	$userlist=array();
	if($userresult->num_rows>0){
	while($users=$userresult->fetch_assoc()){
	$userlist[]=$users["fullname"];
	}
    }
    return $userlist;
}




// Godown Creation

public function addgodowncreation($mysqli) {
	$thiredpartystock = $stockwith = $allowstock =  '';

	// $thiredpartystock = $stockwith = $allowstock = ;
	
	if (isset($_POST['godownname'])) {
		$godownname  = mysqli_real_escape_string($mysqli,$_POST['godownname']);		
		}
    if(isset($_POST['alias'])) {
	    $alias  = mysqli_real_escape_string($mysqli,$_POST['alias']);
		}
    if (isset($_POST['address'])) {
		$address  = mysqli_real_escape_string($mysqli,$_POST['address']);		
		}
    if(isset($_POST['under'])) {
	    $under  = mysqli_real_escape_string($mysqli,$_POST['under']);
		} 
	
	if(isset($_POST['allowstock'])) {
		$allowstock  = mysqli_real_escape_string($mysqli,$_POST['allowstock']);
		}
	if (isset($_POST['stockwith'])) {
		$stockwith  = mysqli_real_escape_string($mysqli,$_POST['stockwith']);		
			}
		if(isset($_POST['thiredpartystock'])) {
			$thiredpartystock  = mysqli_real_escape_string($mysqli,$_POST['thiredpartystock']);
			}
		if(isset($_POST['status']) &&    $_POST['status'] == 'Yes')		
	{
		$status=0;
	}
	else
	{
		$status=1;
	}


      $qry = "INSERT INTO  godowncreation (
		  godownname,alias,address,under,
		  allowstock,stockwith,thiredpartystock,status) 
		  
		  VALUE (

		'$godownname',
		'$alias',
		'$address',
		'$under',
		'$allowstock',
		'$stockwith',
		'$thiredpartystock',
		'$status'
	  )";

	  $res =$mysqli->query($qry)or die("Error in Query".$mysqli->error);
	  $id = 0;
	  $id = $mysqli->insert_id;
  
	  return $id; 

}

public function updategodowncreation($mysqli,$id) {
	$thiredpartystock = $stockwith =  '';

	$date  = date('Y-m-d');
	
	if (isset($_POST['godownname'])) {
		$godownname  = mysqli_real_escape_string($mysqli,$_POST['godownname']);		
		}
    if(isset($_POST['alias'])) {
	    $alias  = mysqli_real_escape_string($mysqli,$_POST['alias']);
		}
    if (isset($_POST['address'])) {
		$address  = mysqli_real_escape_string($mysqli,$_POST['address']);		
		}
    if(isset($_POST['under'])) {
	    $under  = mysqli_real_escape_string($mysqli,$_POST['under']);
		} 
	if (isset($_POST['users'])) {
		$users  = mysqli_real_escape_string($mysqli,$_POST['users']);		
		}
	if(isset($_POST['allowstock'])) {
		$allowstock  = mysqli_real_escape_string($mysqli,$_POST['allowstock']);
		}
	if (isset($_POST['stockwith'])) {
		$stockwith  = mysqli_real_escape_string($mysqli,$_POST['stockwith']);		
			}
		if(isset($_POST['thiredpartystock'])) {
			$thiredpartystock  = mysqli_real_escape_string($mysqli,$_POST['thiredpartystock']);
			}
		if(isset($_POST['status']) &&    $_POST['status'] == 'Yes')		
	{
		$status=0;
	}
	else
	{
		$status=1;
	}


 $updateQry = 'UPDATE  godowncreation  SET 
 godownname="'.strip_tags($godownname).'" ,
 alias="'.strip_tags($alias).'" ,
 address="'.strip_tags($address).'" ,
 under="'.strip_tags($under).'" ,
 allowstock="'.strip_tags($allowstock).'" ,
 stockwith="'.strip_tags($stockwith).'" ,
 thiredpartystock="'.strip_tags($thiredpartystock).'" ,
 status="'.$status.'" WHERE id="'.mysqli_real_escape_string($mysqli,$id).'"';  

$res =$mysqli->query($updateQry)or die("Error in in update Query!.".$mysqli->error); 

}



public function deletegodowncreation($mysqli, $id){
	$date  = date('Y-m-d'); 
	$deletestock = "UPDATE godowncreation set status='1' WHERE id='".strip_tags($id)."' ";
	$deletestockres=$mysqli->query($deletestock) or die("Error in delete query".$mysqli->error);
}



public function getgodowncreation($mysqli,$idupd)
{
	$qry = "SELECT * FROM godowncreation WHERE id='".mysqli_real_escape_string($mysqli,$idupd)."'"; 
	$res =$mysqli->query($qry)or die("Error in Get All Records".$mysqli->error);
	$detailrecords = array();
	if ($mysqli->affected_rows>0)
	{
		$row = $res->fetch_object();	
		$detailrecords['id']               = $row->id; 
		$detailrecords['godownname']       	   = strip_tags($row->godownname);
		$detailrecords['alias']        = strip_tags($row->alias);
		$detailrecords['address']        = strip_tags($row->address);
		$detailrecords['under']        = strip_tags($row->under);
		$detailrecords['allowstock']        = strip_tags($row->allowstock);
		$detailrecords['stockwith']        = strip_tags($row->stockwith);
		$detailrecords['thiredpartystock']        = strip_tags($row->thiredpartystock);
		$detailrecords['status']           = strip_tags($row->status);		

	}
	return $detailrecords;
}




// Add User Creation



public function addusercreation($mysqli) {

	
	$date  = date('Y-m-d');
	
	if (isset($_POST['role'])) {
		$role  = mysqli_real_escape_string($mysqli,$_POST['role']);		
		}
    if(isset($_POST['firstname'])) {
	    $firstname  = mysqli_real_escape_string($mysqli,$_POST['firstname']);
		}
    if (isset($_POST['lastname'])) {
		$lastname  = mysqli_real_escape_string($mysqli,$_POST['lastname']);		
		}
    if(isset($_POST['fullname'])) {
	    $fullname  = mysqli_real_escape_string($mysqli,$_POST['fullname']);
		} 
	if (isset($_POST['title'])) {
		$title  = mysqli_real_escape_string($mysqli,$_POST['title']);		
		}
	if(isset($_POST['email'])) {
		$email  = mysqli_real_escape_string($mysqli,$_POST['email']);
		}
	if (isset($_POST['username'])) {
		$username  = mysqli_real_escape_string($mysqli,$_POST['username']);		
			}
	if(isset($_POST['password'])) {
		$password  = mysqli_real_escape_string($mysqli,$_POST['password']);
		    }
	if(isset($_POST['companyname'])) {
			$companyname  = mysqli_real_escape_string($mysqli,$_POST['companyname']);
			}

			if(isset($_POST['administration'])) {
				$administration  = $_POST['administration'];
				}
				$administration=implode(",",$administration);

			if(isset($_POST['master'])) {
				$master  = $_POST['master'];
				}
		        $master=implode(",",$master);

	if(isset($_POST['profitallocation'])) {
		$profitallocation = $_POST['profitallocation'];

	}
	$profitallocation = implode(",",$profitallocation);


	if(isset($_POST['purchaseorder'])) {
			$purchaseorder  = $_POST['purchaseorder'];
			}
		$purchaseorder=implode(",",$purchaseorder);


		if(isset($_POST['grn'])) {
			$grn  = $_POST['grn'];
			}		
		$grn=implode(",",$grn);


		if(isset($_POST['mhepurchaseorder'])) {
			$mhepurchaseorder  = $_POST['mhepurchaseorder'];
			}		
		$mhepurchaseorder=implode(",",$mhepurchaseorder);


		if(isset($_POST['mhegrn'])) {
			$mhegrn  = $_POST['mhegrn'];
			}		
		$mhegrn=implode(",",$mhegrn);

		if(isset($_POST['damageandexpiry'])) {
			$damageandexpiry  = $_POST['damageandexpiry'];
			}		
		$damageandexpiry=implode(",",$damageandexpiry);


		if(isset($_POST['financeentry'])) {
			$financeentry  = $_POST['financeentry'];
			}		
		$financeentry=implode(",",$financeentry);


		if(isset($_POST['gstr'])) {
			$gstr  = $_POST['gstr'];
			}		
		$gstr=implode(",",$gstr);


		if(isset($_POST['workorder'])) {
			$workorder  = $_POST['workorder'];
			}		
		$workorder=implode(",",$workorder);


		if(isset($_POST['billing'])) {
			$billing  = $_POST['billing'];
			}		
		$billing=implode(",",$billing);


		if(isset($_POST['fixedassets'])) {
			$fixedassets  = $_POST['fixedassets'];
			}		
		$fixedassets=implode(",",$fixedassets);


		if(isset($_POST['financialstatement'])) {
			$financialstatement  = $_POST['financialstatement'];
			}		
		$financialstatement=implode(",",$financialstatement);


		if(isset($_POST['hr'])) {
			$hr  = $_POST['hr'];
			}		
		$hr=implode(",",$hr);

	if(isset($_POST['status']) &&    $_POST['status'] == 'Yes')		
	{
		$status=0;
	}
	else
	{
		$status=1;
	}

	

	$qry = "INSERT INTO  usercreation (
		role,firstname,	lastname,fullname,
		title,email,password,username,companyname,
		administration,master,profileallocation,purchaseorder,
		grn,mhepurchaseorder,mhegrn,damageandexpiry,financeentry,
		gstr,workorder,billing,fixedassets,financialstatement,hr,status) 
		
		VALUE (
	  '$role',
	  '$firstname',
	  '$lastname',
	  '$fullname',	  
	  '$title',
	  '$email',
	  '$password',
	  '$username',
	  '$companyname',
	  '$administration',
	  '$master',
	  '$profitallocation',
	  '$purchaseorder',
	  '$grn',
	  '$mhepurchaseorder',
	  '$mhegrn',
	  '$damageandexpiry',
	  '$financeentry',
	  '$gstr',
	  '$workorder',
	  '$billing',
	  '$fixedassets',
	  '$financialstatement',
	  '$hr',
	  '$status'
	)";

	$res =$mysqli->query($qry)or die("Error in Query".$mysqli->error);
	$id = 0;
	$id = $mysqli->insert_id;

	return $id; 
}





public function updateusercreation($mysqli,$id) {


	$date  = date('Y-m-d');
	
	if (isset($_POST['role'])) {
		$role  = mysqli_real_escape_string($mysqli,$_POST['role']);		
		}
    if(isset($_POST['firstname'])) {
	    $firstname  = mysqli_real_escape_string($mysqli,$_POST['firstname']);
		}
    if (isset($_POST['lastname'])) {
		$lastname  = mysqli_real_escape_string($mysqli,$_POST['lastname']);		
		}
    if(isset($_POST['fullname'])) {
	    $fullname  = mysqli_real_escape_string($mysqli,$_POST['fullname']);
		} 
	if (isset($_POST['title'])) {
		$title  = mysqli_real_escape_string($mysqli,$_POST['title']);		
		}
	if(isset($_POST['email'])) {
		$email  = mysqli_real_escape_string($mysqli,$_POST['email']);
		}
	if (isset($_POST['username'])) {
		$username  = mysqli_real_escape_string($mysqli,$_POST['username']);		
			}
	if(isset($_POST['password'])) {
		$password  = mysqli_real_escape_string($mysqli,$_POST['password']);
		    }
	if(isset($_POST['companyname'])) {
			$companyname  = mysqli_real_escape_string($mysqli,$_POST['companyname']);
			}

			if(isset($_POST['administration'])) {
				$administration  = $_POST['administration'];
				}
				$administration=implode(",",$administration);

			if(isset($_POST['master'])) {
				$master  = $_POST['master'];
				}
		        $master=implode(",",$master);

	if(isset($_POST['profitallocation'])) {
		$profitallocation = $_POST['profitallocation'];

	}
	$profitallocation = implode(",",$profitallocation);


	if(isset($_POST['purchaseorder'])) {
			$purchaseorder  = $_POST['purchaseorder'];
			}
		$purchaseorder=implode(",",$purchaseorder);


		if(isset($_POST['grn'])) {
			$grn  = $_POST['grn'];
			}		
		$grn=implode(",",$grn);


		if(isset($_POST['mhepurchaseorder'])) {
			$mhepurchaseorder  = $_POST['mhepurchaseorder'];
			}		
		$mhepurchaseorder=implode(",",$mhepurchaseorder);


		if(isset($_POST['mhegrn'])) {
			$mhegrn  = $_POST['mhegrn'];
			}		
		$mhegrn=implode(",",$mhegrn);

		if(isset($_POST['damageandexpiry'])) {
			$damageandexpiry  = $_POST['damageandexpiry'];
			}		
		$damageandexpiry=implode(",",$damageandexpiry);


		if(isset($_POST['financeentry'])) {
			$financeentry  = $_POST['financeentry'];
			}		
		$financeentry=implode(",",$financeentry);


		if(isset($_POST['gstr'])) {
			$gstr  = $_POST['gstr'];
			}		
		$gstr=implode(",",$gstr);


		if(isset($_POST['workorder'])) {
			$workorder  = $_POST['workorder'];
			}		
		$workorder=implode(",",$workorder);


		if(isset($_POST['billing'])) {
			$billing  = $_POST['billing'];
			}		
		$billing=implode(",",$billing);


		if(isset($_POST['fixedassets'])) {
			$fixedassets  = $_POST['fixedassets'];
			}		
		$fixedassets=implode(",",$fixedassets);


		if(isset($_POST['financialstatement'])) {
			$financialstatement  = $_POST['financialstatement'];
			}		
		$financialstatement=implode(",",$financialstatement);


		if(isset($_POST['hr'])) {
			$hr  = $_POST['hr'];
			}		
		$hr=implode(",",$hr);

	if(isset($_POST['status']) &&    $_POST['status'] == 'Yes')		
	{
		$status=0;
	}
	else
	{
		$status=1;
	}






	

	$updateQry = 'UPDATE  usercreation  SET 
	role="'.strip_tags($role).'" ,
	firstname="'.strip_tags($firstname).'" ,
	lastname="'.strip_tags($lastname).'" ,
	fullname="'.strip_tags($fullname).'" ,	
	title="'.strip_tags($title).'" ,
	emailpassword="'.strip_tags($emailpassword).'" ,
	password="'.strip_tags($password).'" ,
	companyname="'.strip_tags($companyname).'" ,
	administration="'.strip_tags($administration).'" ,
	master="'.strip_tags($master).'" ,
	profitallocation="'.strip_tags($profitallocation).'" ,
	allowstock="'.strip_tags($purchaseorder).'" ,
	grn="'.strip_tags($grn).'" ,
	mhepurchaseorder="'.strip_tags($mhepurchaseorder).'" ,
	mhegrn="'.strip_tags($mhegrn).'" ,
	financeentry="'.strip_tags($financeentry).'" ,
	gstr="'.strip_tags($gstr).'" ,
	workorder="'.strip_tags($workorder).'" ,
	billing="'.strip_tags($billing).'" ,
	fixedassets="'.strip_tags($fixedassets).'" ,
	financialstatement="'.strip_tags($financialstatement).'" ,
	hr="'.strip_tags($hr).'" ,
	status="'.$status.'" WHERE id="'.mysqli_real_escape_string($mysqli,$id).'"';  
   
   $res =$mysqli->query($updateQry)or die("Error in in update Query!.".$mysqli->error); 
   

}


public function deleteusercreation($mysqli, $id){
	$date  = date('Y-m-d'); 
	$deletestock = "UPDATE usercreation set status='1' WHERE id='".strip_tags($id)."' ";
	$deletestockres=$mysqli->query($deletestock) or die("Error in delete query".$mysqli->error);
}
}
	
?>