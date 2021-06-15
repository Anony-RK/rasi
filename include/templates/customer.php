<?php 
$subgrouplist=$userObj->getSubgroup($mysqli);
$id=0;
 if(isset($_POST['submitcustomer']))
 {
    if(isset($_POST['id']) && $_POST['id'] >0 && is_numeric($_POST['id'])){		
        $id = $_POST['id']; 	
    $updatecustomer = $userObj->updatecustomer($mysqli,$id);  
    ?>
   <script>location.href='<?php echo $HOSTPATH;  ?>editcustomer&msc=2';</script> 
    <?php	}
    else{   
		$addcustomer = $userObj->addcustomer($mysqli);   
        ?>
      <script>location.href='<?php echo $HOSTPATH;  ?>editcustomer&msc=1';</script> 
        <?php
    }
 }  
 
$del=0;
if(isset($_GET['del']))
{
$del=$_GET['del'];
}
if($del>0)
{
	$deletecustomer = $userObj->deletecustomer($mysqli,$del); 
	?>
	<script>location.href='<?php echo $HOSTPATH;  ?>editcustomer&msc=3';</script>
<?php	
}

if(isset($_GET['upd']))
{
$idupd=$_GET['upd'];
}
$status =0;
if($idupd>0)
{
	$getcustomer = $userObj->getcustomer($mysqli,$idupd); 
	
	if (sizeof($getcustomer)>0) {
        for($icustomer=0;$icustomer<sizeof($getcustomer);$icustomer++)  {	
            $customerid              = $getcustomer['customerid'];
            $customercode            = $getcustomer['customercode'];
            $customername            = $getcustomer['customername'];
			$gender                	 = $getcustomer['gender'];
			$dateofbirth      	     = $getcustomer['dateofbirth'];
            $customerimage     	     = $getcustomer['customerimage'];
            $age      			     = $getcustomer['age'];
			$mobilenumber       	 = $getcustomer['mobilenumber'];
			$whatsappnumber          = $getcustomer['whatsappnumber'];
			$anniverserydate         = $getcustomer['anniverserydate'];
			$emailid     			 = $getcustomer['emailid'];
			$needmembership          = $getcustomer['needmembership'];
            
            $gstno                   = $getcustomer['gstno'];
            $contactperson          = $getcustomer['contactperson'];
            $address1                = $getcustomer['address1'];
            $address2                = $getcustomer['address2'];
           
            $district                = $getcustomer['district'];            
            $state                   = $getcustomer['state'];
            $country                 = $getcustomer['country'];
            $pincode                 = $getcustomer['pincode'];      

			$typeofcustomer	         = $getcustomer['typeofcustomer'];
			$noofvisit               = $getcustomer['noofvisit'];
            $frequencyofvisit        = $getcustomer['frequencyofvisit']; 

            $subgroup                = $getcustomer['subgroup'];
            $groups                  = $getcustomer['groups'];
            $ledgername              = $getcustomer['ledgername'];

            $costcenter              = $getcustomer['costcenter'];
            $inventory               = $getcustomer['inventory'];
            $status	    		     = $getcustomer['status'];

		}
	}
}
?>
  


<!-- Page header start -->
<div class="page-header">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">Customer Master</li>
					</ol>

					<a href="editcustomer">
					<button type="button" class="btn btn-primary"><span class="icon-border_color"></span>&nbsp Edit Customer</button>
					</a>

				</div>
				<!-- Page header end -->

				<!-- Main container start -->
				<div class="main-container">


<!--------form start-->
<form id = "customer" name="customer" action="" method="post" enctype="multipart/form-data"> 
<input type="hidden" class="form-control" value="<?php if(isset($customerid )) echo $customerid; ?>"  id="id" name="id" aria-describedby="id" placeholder="Enter id">

 		<!-- Row start -->
         <div class="row gutters">

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
					<div class="card-header">
						<div class="card-title">General Info</div>
					</div>
                    <div class="card-body">
                            <!--Fields -->
                              <div class="row">
                                       <div class="col-xl-4 col-lglg-4 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label >Customer Code<span class="text-danger
                                                    ">*</span></label>
                                                <input type="text" tabindex="1" readonly  class="form-control" id="customercode" name="customercode" value="">
                                            </div>
                                        </div>

                                <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                                <div class="form-group">
                                    <label for="disabledInput">Type Of Customer</label>
                                    <select class="form-control" tabindex="2" id="typeofcustomer" name="typeofcustomer">     
                                      <option value="">-- Select Type Of Customer--</option>
                                      <option <?php if(isset($typeofcustomer)) { if($typeofcustomer == "Machine Sale" ) echo 'selected'; }  ?> value="Machine Sale"> Machine Sale</option>

                                      <option <?php if(isset($typeofcustomer)) { if($typeofcustomer == "Spare Parts Sale" ) echo 'selected'; }  ?> value="Spare Parts Sale">Spare Parts Sale</option>

                                      <option <?php if(isset($typeofcustomer)) { if($typeofcustomer == "Rendal for Machine" ) echo 'selected'; }  ?> value="Rendal for Machine">Rendal for Machine</option>

                                      <option <?php if(isset($typeofcustomer)) { if($typeofcustomer == "Rendal for Spare Parts" ) echo 'selected'; }  ?> value="Rendal for Spare Parts">Rendal for Spare Parts</option>
                                    </select>
                                         
                                </div>
                            </div>

                                       <div class="col-xl-4 col-lglg-4 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label >Customer Name<span class="text-danger
                                                    ">*</span></label>
                                                <input type="text" tabindex="3" class="form-control" id="customername" name="customername" value="<?php if(isset($customername )) echo $customername ; ?>" placeholder="Enter Customer Name">
                                                <label id="customernamecheck" class="text-danger">Enter Customer Name</label>
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lglg-4 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="disabledInput">Address 1</label>
                                                <input type="text" tabindex="4" id="address1" name="address1" class="form-control" value="<?php if(isset($address1 )) echo $address1 ; ?>" placeholder="Enter Address1">
                                               
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lglg-4 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="disabledInput">Address 2</label>
                                                <input type="text" tabindex="5" id="address2" name="address2" class="form-control" value="<?php if(isset($address2 )) echo $address2 ; ?>" placeholder="Enter Address2">
                                                
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lglg-4 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="disabledInput">Pin Code</label>
                                                <input type="number" tabindex="6" id="pincode" name="pincode" class="form-control" value="<?php if(isset($pincode )) echo $pincode ; ?>" placeholder="Enter Pincode">
                                                
                                            </div>
                                        </div>
                                       

                                        <script>
function selectdist(){
    var distval = document.getElementById("district").value;
var tamilnadu = ["Ariyalur", "Chengalpattu","Chennai", "Coimbatore",
        "Cuddalore", "Dharmapuri","Dindigul", "Erode",
        "Kallakurichi", "Kanchipuram","Kanyakumari",
        "Karur", "Krishnagiri","Madurai", "Mayiladuthurai",
        "Nagapattinam", "Nilgiris","Namakkal", "Perambalur",
        "Pudukkottai", "Ramanathapuram","Ranipet", "Salem",
        "Sivaganga", "Tenkasi","Tirupur", "Tiruchirappalli",
        "Theni", "Tirunelveli","Thanjavur", "Thoothukudi",
        "Tirupattur", "Tiruvallur","Tiruvarur", "Tiruvannamalai",
        "Vellore", "Viluppuram","Virudhunagar"];  
     tamilnadu.forEach((element) => {
            for(var i = 0; i< tamilnadu.length;i++) {
                // console.log(tamilnadu[i]);
                if(tamilnadu[i] == distval ) {
                    document.getElementById("state").value="Tamil Nadu";
                    document.getElementById("country").value="India";
                }
                
            }
               
            
        });
 }
</script>

                                        <div class="col-xl-4 col-lglg-4 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="disabledInput">District</label>                                               
                                                <select class="form-control chosen-select comp-field"  tabindex="7" id="district"  onchange="selectdist()" name="district">
                                                    <option   value="">Select district</option>
                                                    <option <?php if(isset($district)) { if($district == "Ariyalur" ) echo 'selected'; }  ?>  value="Ariyalur">Ariyalur</option>
                                                    <option <?php if(isset($district)) { if($district == "Chengalpattu" ) echo 'selected'; }  ?>  value="Chengalpattu">Chengalpattu </option>
                                                    <option <?php if(isset($district)) { if($district == "Chennai" ) echo 'selected'; }  ?>  value="Chennai">Chennai </option>
                                                    <option <?php if(isset($district)) { if($district == "Coimbatore" ) echo 'selected'; }  ?>  value="Coimbatore">Coimbatore </option>
                                                    <option <?php if(isset($district)) { if($district == "Cuddalore" ) echo 'selected'; }  ?>  value="Cuddalore">Cuddalore</option>
                                                    <option <?php if(isset($district)) { if($district == "Dharmapuri" ) echo 'selected'; }  ?>  value="Dharmapuri">Dharmapuri</option>
                                                    <option <?php if(isset($district)) { if($district == "Dindigul" ) echo 'selected'; }  ?>  value="Dindigul">Dindigul</option>
                                                    <option <?php if(isset($district)) { if($district == "Erode" ) echo 'selected'; }  ?>  value="Erode"> Erode</option>
                                                    <option <?php if(isset($district)) { if($district == "Kallakurichi" ) echo 'selected'; }  ?>  value="Kallakurichi">Kallakurichi</option>
                                                    <option <?php if(isset($district)) { if($district == "Kanchipuram" ) echo 'selected'; }  ?>  value="Kanchipuram">Kanchipuram</option>
                                                    <option <?php if(isset($district)) { if($district == "Kanyakumari" ) echo 'selected'; }  ?>  value="Kanyakumari">Kanyakumari</option>
                                                    <option <?php if(isset($district)) { if($district == "Karur" ) echo 'selected'; }  ?>  value="Karur">Karur</option>
                                                    <option <?php if(isset($district)) { if($district == "Krishnagiri" ) echo 'selected'; }  ?>  value="Krishnagiri">Krishnagiri</option>
                                                    <option <?php if(isset($district)) { if($district == "Madurai" ) echo 'selected'; }  ?>  value="Madurai">Madurai</option>
                                                    <option <?php if(isset($district)) { if($district == "Mayiladuthurai" ) echo 'selected'; }  ?>  value="Mayiladuthurai">Mayiladuthurai</option>
                                                    <option <?php if(isset($district)) { if($district == "Nagapattinam" ) echo 'selected'; }  ?>  value="Nagapattinam">Nagapattinam</option>
                                                    <option <?php if(isset($district)) { if($district == "Nilgiris" )  echo 'selected'; }  ?>  value="Nilgiris">Nilgiris</option>
                                                    <option <?php if(isset($district)) { if($district == "Namakkal" ) echo 'selected'; }  ?>  value="Namakkal">Namakkal</option>
                                                    <option <?php if(isset($district)) { if($district == "Puducherry" ) echo 'selected'; }  ?>  value="Puducherry">Puducherry</option>
                                                    <option <?php if(isset($district)) { if($district == "Perambalur" ) echo 'selected'; }  ?>  value="Perambalur">Perambalur</option>
                                                    <option <?php if(isset($district)) { if($district == "Pudukkottai" ) echo 'selected'; }  ?>  value="Pudukkottai">Pudukkottai</option>
                                                    <option <?php if(isset($district)) { if($district == "Ramanathapuram" ) echo 'selected'; }  ?>  value="Ramanathapuram">Ramanathapuram</option>
                                                    <option <?php if(isset($district)) { if($district == "Ranipet" ) echo 'selected'; }  ?>  value="Ranipet">Ranipet</option>
                                                    <option <?php if(isset($district)) { if($district == "Salem" ) echo 'selected'; }  ?>  value="Salem">Salem</option>
                                                    <option <?php if(isset($district)) { if($district == "Sivagangai" ) echo 'selected'; }  ?>  value="Sivagangai">Sivagangai</option>
                                                    <option <?php if(isset($district)) { if($district == "Tenkasi" ) echo 'selected'; }  ?>  value="Tenkasi">Tenkasi</option>
                                                    <option <?php if(isset($district)) { if($district == "Tirupur" ) echo 'selected'; }  ?>  value="Tirupur">Tirupur</option>
                                                    <option <?php if(isset($district)) { if($district == "Tiruchirappalli" ) echo 'selected'; }  ?>  value="Tiruchirappalli">Tiruchirappalli</option>
                                                    <option <?php if(isset($district)) { if($district == "Theni" ) echo 'selected'; }  ?>  value="Theni">Theni</option>
                                                    <option <?php if(isset($district)) { if($district == "Tirunelveli" ) echo 'selected'; }  ?>  value="Tirunelveli">Tirunelveli</option>
                                                    <option <?php if(isset($district)) { if($district == "Thanjavur" ) echo 'selected'; }  ?>  value="Thanjavur">Thanjavur</option>
                                                    <option <?php if(isset($district)) { if($district == "Thoothukudi" ) echo 'selected'; }  ?>  value="Thoothukudi">Thoothukudi</option>
                                                    <option <?php if(isset($district)) { if($district == "Tirupattur" ) echo 'selected'; }  ?>  value="Tirupattur">Tirupattur</option>
                                                    <option <?php if(isset($district)) { if($district == "Tiruvallur" ) echo 'selected'; }  ?>  value="Tiruvallur">Tiruvallur</option>
                                                    <option <?php if(isset($district)) { if($district == "Tiruvarur" ) echo 'selected'; }  ?>  value="Tiruvarur">Tiruvarur</option>
                                                    <option <?php if(isset($district)) { if($district == "Tiruvannamalai" ) echo 'selected'; }  ?>  value="Tiruvannamalai">Tiruvannamalai</option>
                                                    <option <?php if(isset($district)) { if($district == "Vellore" ) echo 'selected'; }  ?>  value="Vellore">Vellore</option>
                                                    <option <?php if(isset($district)) { if($district == "Viluppuram" ) echo 'selected'; }  ?>  value="Viluppuram">Viluppuram</option>
                                                    <option <?php if(isset($district)) { if($district == "Virudhunagar" ) echo 'selected'; }  ?>  value="Virudhunagar">Virudhunagar</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lglg-4 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="disabledInput">State</label>
                                                 <input type="text" readonly tabindex="8" id="state" name="state" class="form-control" value="<?php if(isset($state )) echo $state ; ?>" > 
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lglg-4 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="disabledInput">Country</label>
                                                <input type="text" readonly tabindex="9" id="country" name="country" class="form-control" value="<?php if(isset($country )) echo $country ; ?>"  >
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lglg-4 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="disabledInput">Contact Person</label>
                                                <input type="text" tabindex="10" id="contactperson" name="contactperson" placeholder="Enter Contact Person" class="form-control" value="<?php if(isset($contactperson )) echo $contactperson ; ?>">
                                                
                                            </div>
                                        </div>


                                    <div class="col-xl-4 col-lglg-4 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="disabledInput">Mobile Number<span class="text-danger
                                                    ">*</span></label>
                                                <input type="number"  id="mobilenumber" tabindex="11"  name="mobilenumber" class="form-control"  value="<?php if(isset($mobilenumber )) echo $mobilenumber ; ?>" placeholder="Enter Mobile Number">
                                                  <label id="mobilenumbercheck" class="text-danger">Enter Mobile Number</label>

                                            </div>
                                        </div>

                              <div class="col-xl-4 col-lglg-4 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="disabledInput">Whatsapp Number</label>
                                                <input type="text" tabindex="12" id="whatsappnumber" name="whatsappnumber" placeholder="Enter Whatsapp Number" class="form-control" value="<?php if(isset($whatsappnumber )) echo $whatsappnumber ; ?>">
                                                </div>
                                        </div>

                                        <div class="col-xl-4 col-lglg-4 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="disabledInput">Email Id</label>
                                                <input type="email" tabindex="13" id="emailid" name="emailid" class="form-control" value="<?php if(isset($emailid )) echo $emailid ; ?>" placeholder="Enter Email Id">
                                            <label id="emailidcheck" class="text-danger">Enter Valid  Email Id</label>
                                            </div>
                                        </div>

                                         <div class="col-xl-4 col-lglg-4 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="disabledInput">GST No</label>
                                                <input type="text" tabindex="14" id="gstnumber" name="gstnumber" class="form-control" placeholder="Enter GST Number" value="<?php if(isset($gstnumber )) echo $gstnumber ; ?>">
                                                <label id="gstnumbercheck" class="text-danger">Enter Valid GST Number</label>
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lglg-4 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="disabledInput">Is Branch Available</label>
                                                <select class="form-control" tabindex="15" id="isbranch" name="isbranch">
                                                
                                                <option value="">--Select Option--</option>
                                                <option <?php if(isset($isbranch)) { if($isbranch == "Yes" ) echo 'selected'; }  ?> value="Yes"> Yes</option>
                                                <option  <?php if(isset($isbranch)) { if($isbranch == "No" ) echo 'selected'; }  ?> value="No"> No</option>
                                            </select>         
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lglg-4 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="disabledInput">Need Membership</label>
                                                <select class="form-control" tabindex="16" id="needmembership" name="needmembership">
                                                
                                                <option value=""> Select Membership</option>
                                                <option <?php if(isset($needmembership)) { if($needmembership == "Yes" ) echo 'selected'; }  ?> value="Yes"> Yes</option>
                                                <option  <?php if(isset($needmembership)) { if($needmembership == "No" ) echo 'selected'; }  ?> value="No"> No</option>
                                            </select>         
                                            </div>
                                        </div>
                                </div>
                          </div>
                      </div>
                  </div>
            <div>
        </div>
</div>
          <div id="BulkUploadModal" class="modal">
              <div class="modal-content">
                 <span class="bulkclose" style="width:4%;">&times;</span>
                   <iframe src="customeruploadbulk.php" height="200px"></iframe>
             </div>
          </div>
         <!-- </div> -->

         <!-- Membership -->

                 <!-- Row start -->
        <div id="membershipfield" style="display: none">
         <div class="row gutters">

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title"> Membership Details</div>
                    </div>
                    <div class="card-body">
                            <!--Fields -->
                              <div class="row">

                              <div class="col-md-4">
                                <div class="form-group">
                                    <label for="disabledInput">Membership No</label>
                                    <input type="text" readonly  id="membershipno" name="membershipno" class="form-control" value="<?php if(isset($membershipno )) echo $membershipno; ?>">
                                </div>
                              </div>

                              <div class="col-md-4">
                                <div class="form-group">
                                    <label for="disabledInput">Value of Membership (In Rs)</label>
                                    <input type="number"   id="membershipvalue" name="membershipvalue" class="form-control" value="<?php if(isset($membershipvalue )) echo $membershipvalue; ?>" placeholder="Enter Value of Membership">
                                </div>
                              </div>

                              <div class="col-md-4">
                              </div>

                          </div>


                           <div class="row">

                              <div class="col-md-4">
                                <div class="form-group">
                                    <label for="disabledInput">Issue Date</label>
                                    <input type="date"   id="issuedate" name="issuedate" class="form-control" value="<?php if(isset($issuedate )) echo $issuedate; ?>">
                                </div>
                              </div>

                              <div class="col-md-4">
                                <div class="form-group">
                                    <label for="disabledInput">Expiry Date</label>
                                    <input type="date"   id="expirydate" name="expirydate" class="form-control" value="<?php if(isset($expirydate )) echo $expirydate; ?>">
                                </div>
                              </div>

                              <div class="col-md-4">
                              </div>

                          </div>

                          <div class="row">

                              <div class="col-md-4">
                                <div class="form-group">
                                    <label for="disabledInput">Mobile Number</label>
                                    <input type="text"   id="mobile1" name="mobile1" class="form-control" value="<?php if(isset($mobile1 )) echo $mobile1; ?>" placeholder="Enter Mobile Number">
                                </div>
                              </div>

                              <div class="col-md-4">
                                <div class="form-group">
                                    <label for="disabledInput">Person 1</label>
                                    <input type="text"   id="person1" name="person1" class="form-control" value="<?php if(isset($person1 )) echo $person1; ?>" placeholder="Enter Person 1">
                                </div>
                              </div>

                              <div class="col-md-4">
                              </div>

                          </div>

                           <div class="row">

                              <div class="col-md-4">
                                <div class="form-group">
                                    <label for="disabledInput">Mobile Number</label>
                                    <input type="text"   id="mobile2" name="mobile2" class="form-control" value="<?php if(isset($mobile2)) echo $mobile2; ?>" placeholder="Enter Mobile Number">
                                </div>
                              </div>

                              <div class="col-md-4">
                                <div class="form-group">
                                    <label for="disabledInput">Person 2</label>
                                    <input type="text"   id="person2" name="person2" class="form-control" value="<?php if(isset($person2)) echo $person2; ?>" placeholder="Enter Person 2">
                                </div>
                              </div>

                              <div class="col-md-4">
                              </div>

                          </div>

                          <div class="row">

                              <div class="col-md-4">
                                <div class="form-group">
                                    <label for="disabledInput">Mobile Number</label>
                                    <input type="text"   id="mobile3" name="mobile3" class="form-control" value="<?php if(isset($mobile3)) echo $mobile3; ?>" placeholder="Enter Mobile Number">
                                </div>
                              </div>

                              <div class="col-md-4">
                                <div class="form-group">
                                    <label for="disabledInput">Person 3</label>
                                    <input type="text"   id="person3" name="person3" class="form-control" value="<?php if(isset($person3)) echo $person3; ?>" placeholder="Enter Person 3">
                                </div>
                              </div>

                              <div class="col-md-4">
                              </div>

                          </div>

                      </div>
                  </div>
              </div>
</div>
</div>
        <!-- Row start -->
         <div class="row gutters">

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Financial Info</div>
                    </div>
                    <div class="card-body">
                            <!--Fields -->
                              <div class="row">
                                <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                                    <div class="form-group">
                                        <label >Sub Group<span class="text-danger">*</span></label>
                                        <select class="form-control comp-field chosen-select choMandatoryFields" tabindex="18" data-val="true" id="subgroup" name="subgroup">
                                            <option value=''>--Select Subgroup--</option>
                                                    <?php
                                                    if(isset($subgrouplist)){
                                                    for($s=0;$s<=sizeof($subgrouplist)-1;$s++){
                                                        ?>
                                                    <option <?php if(isset($subgroup)) { if($subgroup == $subgrouplist[$s] ) echo 'selected'; } ?> value="<?php if(isset($subgrouplist[$s])){ echo $subgrouplist[$s];} ?>"><?php if(isset($subgrouplist[$s])){ echo $subgrouplist[$s];} ?></option>
                                                <?php }} ?>
                                                </select>
                                        </select>
                                        <label id="subgroupcheck" class="text-danger">Select Sub Group</label>           

                                    </div>
                                </div>

                                <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                                <div class="form-group">
                                        <label for="inputEmail">Group</label>
                                        <input type="text" readonly tabindex="19" class="form-control" id="groupname" name="groupname"  value="<?php if(isset($groupname )) echo $groupname ; ?>">
                                                 
                                    </div>
                                </div>
                               
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                <div class="form-group">
                                        <label for="inputEmail">Ledger Name</label>
                                        <select readonly tabindex="20" name="ledgername" id="ledgername" class="form-control">
                                                        <?php if(isset($ledgername)){ ?>
                                                        <option value="<?php echo $ledgername; ?>"><?php echo $ledgername; ?></option>
                                                        <?php }?>
                                                        <option>Select Ledger</option>
                                                    </select>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                                                        <div class="custom-control custom-checkbox mt-4">
                                                            <input type="checkbox" tabindex="21" id="costcenter" name="costcenter" class="custom-control-input" value="Yes" <?php if(isset($costcenter)=="Yes"){echo'checked';}?> />
                                                            <label class="custom-control-label" for="costcenter"> Cost Center</label>
                                                            
                                                            </div>
                                                        </div>  
                                <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                                                            <div class="custom-control custom-checkbox mt-4">
                                                            &nbsp;<input type="checkbox" tabindex="22" id="inventory" name="inventory" class="custom-control-input"  value="Yes" <?php if(isset($inventory)=="Yes"){echo'checked';}?>/>
                                                            <label class="custom-control-label" for="inventory"> Inventory</label>
                                                        </div>
                                                    </div>
                                                </div><br><br>
                        <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-12">            
                        <button type="button" id="customerdownload" name="customerdownload" tabindex="23"class="btn btn-primary mb-2"><span class="icon-download"></span>Download</button>
                        <button type="button" id="customerupload" name="customerupload" onclick="customerBulkupload()" tabindex="24" class="btn btn-primary mb-2 ml-2"><span class="icon-upload"></span>Upload</button>
                       </div>

                       <div class="col-xl-7 col-lg-7 col-md-4 col-sm-4 col-12"></div>
                       <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-12">
                           <button type="submit" name="submitcustomer" id="submitcustomer"  class="btn btn-primary"  tabindex="25">Submit</button>
                            <button type="button" class="btn btn-outline-secondary" tabindex="26">Cancel</button>   
                       </div>

                        </div>

                          </div>
                      </div>
                  </div>
              </div>
          </form>